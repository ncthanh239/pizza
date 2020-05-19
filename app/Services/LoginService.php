<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Auth;
use Hash;


class LoginService
{ 
    public function check($request){
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['username' => $username, 'password' => $password])){
            if (Auth::user()->group_id == 2){
                Session::flash('success',' hi users !');
                return redirect()->route('users');
            }else{
                Session::flash('success',' hi admin !');
                return redirect()->route('admin');
            }
           return $check;
        }else{
            Session::flash('errorMess','User account or password is incorrect, please check again');
            return view('auth.login', compact('error'));
        }
    }
    public function saveAcc($request){
        $model = new User();
        $model->fill($request->all());
        $model->password = Hash::make($request->all()['password']);
        $model->save();
        auth()->login($model);
        return redirect()->route('users');
    }
}
