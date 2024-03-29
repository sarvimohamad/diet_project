<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function ApiCreateToken(Request $request)
    {
        $creadentials = $request->only('email' , 'password');

        if (Auth::attempt($creadentials)){
            $token = $request->user()->createToken($request->token_name);
            return ['token' =>$token->plainTextToken];
        }else{
            return response('',400);
        }


    }




}
