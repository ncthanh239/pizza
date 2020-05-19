<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Services\LoginService;
use Auth;


class AccountController extends Controller
{
    use AuthenticatesUsers;

    public function __construct(
        LoginService $loginService
      ){
        $this->loginService = $loginService;
    }

    public function loginForm(){
        return view('auth.login');
    }
       public function postLogin(request $request){
        return $this->loginService->check($request);
    }
    public function register(){
	      return view('auth.register');
	    }

	public function save(RegisterRequest $request){
        return $this->loginService->saveAcc($request); 
	}
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
