<?php

namespace App\Http\Controllers;

use App\Http\Resources\DietResource;
use App\Models\Diet;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Policies\UserPolicy;

class DietController extends Controller
{

    public function index(Request $request)
    {
        $deleted_diet = session('delete_diet' ,false);
//        dd($deleted_diet);


        $diets = Diet::all();
        $user = User::find($request->user()->id);
        return view('dashboard' , ['user'=>$user , 'data'=>$diets , 'deleted_diet'=>$deleted_diet]);
    }

    public function create(Request $request)
    {

        $response = Gate::inspect('show' , $request->user());
        if(!$response->allowed()){
            abort('403');
        }

        return view('diet.add');
    }
    public function store(Request $request)
    {

        $diet_img = null;
        if($request->hasFile('diet_image') && $request->file('diet_image')->isValid()){
            $diet_img = $request->diet_image->storePublicly('public/image');
        }

        $data = new Diet();
        $data->name = $request->name;
        $data->user_id = $request->user()->id;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->image = $diet_img;
        $data->qty = $request->qty;
        $data->save();
        return back();

    }

    public function show($id)
    {
        $diet = Diet::find($id);
        return view('diet.detail' , ['diet'=>$diet]);
    }

    public function destroy(Request $request ,$id)
    {
         $request->session()->flash('delete_diet' , $id);
         Diet::find($id)->delete();
         return back();
    }

    public function undo($id)
    {
        Diet::where('id'  , $id)->withTrashed()->restore();
        return redirect()->route('dashboard');
    }



    //api

    public function DietApi()
    {
        $diet = Diet::all();
        return DietResource::collection($diet);
    }

    public function DietCreateApi(Request $request)
    {
        $user = User::where('email' , $request->email)->first();
        $diet_img = null;
        if($request->hasFile('diet_image') && $request->file('diet_image')->isValid()){
            $diet_img = $request->diet_image->store('image');
        }

        $data = new Diet();
        $data->name = $request->name;
        $data->user_id = $user->id;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->image = $diet_img;
        $data->qty = $request->qty;
        $data->save();
        return new DietResource($data);
    }


}
