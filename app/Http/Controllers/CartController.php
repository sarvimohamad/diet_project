<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Diet;
use App\Models\User;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function addCart(Request $request )
    {
//        $diet = Cart::all();
//        $test = $diet->pluck('diet_id')->implode(',');
//
//        if(){
//            return 'no';
//        }

       $test = Cart::where('diet_id', '=', $request->get('diet_id'))->where('user_id' , $request->user()->id)->exists();
       if($test === true){
           return 'exist record';
       }

            $cart = new Cart();
            $cart->user_id=$request->user()->id;
            $cart->diet_id=$request->get('diet_id');
            $cart->qty=1;
            $cart->save();

        return redirect()->route('listCart');

    }

    public function listCart(Request $request)
    {
        $user = User::find($request->user()->id);
        $carts = Cart::where('user_id' , $request->user()->id)->get();
        return view('cart.index' , ['carts'=>$carts , 'user'=>$user]);

    }

}
