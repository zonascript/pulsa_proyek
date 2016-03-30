<?php

namespace Pulsa\Http\Controllers;

use Illuminate\Http\Request;

use Pulsa\Http\Requests;
use Pulsa\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;

use Pulsa\Models\User as user;

use Validator;
use Hash;
use Auth;

class authController extends Controller
{
    protected $auth;
    
    function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth', ['except' => ['getLogin', 'postLogin']]);        
    }

    public function index()
    {
        return redirect()->route('home');
    }

    public function getLogin()
    {
        if ($this->auth->check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function getLogout()
    {
        $this->auth->logout(); 
        return redirect('auth/login');
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        $attempt = $this->auth->attempt($request->except('_token', 'remember'), false);
        if ($attempt){
            $user = user::where('username',$request['username'])->firstOrFail();
            if($user->status === 'N') 
                return redirect()->back()->withMessages('Tidak Bisa Login. Status User Nonaktif.');
        }   
        return ($attempt) ? redirect()->route('home') : redirect()->back()->withErrors('Gagal masuk!');
    }
}
