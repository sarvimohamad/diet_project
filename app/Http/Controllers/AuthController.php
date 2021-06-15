<?php

namespace App\Http\Controllers;

use App\Classes\CodeGeneratorClass;
use App\Classes\SmsClass;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\VerifyCodeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'mobile' => $request->get('mobile')
        ]);
        return $this->sendVerify($user, $request->wantsJson());
    }

    public function login(LoginRequest $request)
    {
        /** @var User $user */
        $user = User::query()->where('mobile', $request->get('mobile'))->first();
        return $this->sendVerify($user, $request->wantsJson());
    }

    public function verify(VerifyCodeRequest $request)
    {
        /** @var User $user */
        $user = User::query()->where('mobile', $request->get('mobile'))->first();
        $str = md5($user->id . $user->mobile . $request->get('code'));

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

        public function index(Request $request)
    {
        $user = User::find($request->user()->id);
        return view('dashboard' , ['user'=>$user]);
   }

    public function show(Request $request)
    {
        $user = User::find($request->user()->id);
        return view('profile' , ['user'=>$user]);
   }



}
