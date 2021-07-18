<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index() {
        return view('users.login');
    }

    public function login(LoginRequest $request) {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials)){
            return redirect('/posts');
        }
        else {
            abort(403);
        }

    }


}
