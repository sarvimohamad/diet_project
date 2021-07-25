<?php

namespace App\Http\Controllers;

use App\Classes\CodeGeneratorClass;
use App\Classes\SmsClass;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\VerifyCodeRequest;
use App\Models\Cart;
use App\Models\Diet;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Resources\userResource;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * @var SmsClass
     */
    private $smsClass;
    /**
     * @var CodeGeneratorClass
     */
    private $codeGeneratorClass;

    /**
     * AuthController constructor.
     * @param SmsClass $smsClass
     */
    public function __construct(SmsClass $smsClass, CodeGeneratorClass $codeGeneratorClass)
    {
        $this->smsClass = $smsClass;
        $this->codeGeneratorClass = $codeGeneratorClass;
    }

    private function sendVerify(User $user, $wantsJson = false)
    {
        $code = $this->codeGeneratorClass->make();
        $hash = md5($user->id . $user->mobile . $code);
        $this->smsClass->send($user->mobile, $code);
        if ($wantsJson) {
            return response()->json([
                'hash' => $hash,
                'mobile' => $user->mobile
            ]);
        }

        return redirect()->route('verify', [
            'hash' => $hash,
            'mobile' => $user->mobile
        ]);
    }

    public function register(RegisterRequest $request)
    {
        /** @var User $user */

        $user = User::query()->create([
            'name' => $request->get('name'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
            'password' => hash::make($request->get('password'))
        ]);
        return $this->sendVerify($user, $request->wantsJson());
    }

    public function login(LoginRequest $request)
    {
        $request->validate([
            'mobile' => '|required|sometimes|max:11',
        ]);

//        $test = Auth::login($user);
//        dd($test);

        /** @var User $user */
        $user = User::query()->where('mobile', $request->get('mobile'))->first();
//        dd($user);
        return $this->sendVerify($user, $request->wantsJson());

    }

    public function verify(VerifyCodeRequest $request)
    {

        $request->validate([
            'code' => '|required|max:6',
        ]);




        /** @var User $user */
        $user = User::query()->where('mobile', $request->get('mobile'))->first();
        $str = md5($user->id . $user->mobile . $request->get('code'));

//       $test = $request->session()->flash('exist' , $request->user());

        if ($request->get('hash') == $str) {
            if ($request->wantsJson()) {
                return response()->json(['status' => 'ok']);
            }

            Auth::login($user);
            return redirect()->route('dashboard');
        }
        if ($request->wantsJson()) {
            return response()->json(['status' => 'not ok']);
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }



    public function show(Request $request)
    {
        $user = User::find($request->user()->id);
        return view('profile' , ['user'=>$user]);
   }


    public function UserApi()
    {
        $user = User::all();
        return userResource::collection($user);

   }

}
