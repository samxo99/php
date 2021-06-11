<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FillBalaneRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use App\Http\Requests\TransferRequest;
use App\Models\Amount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register (RegisterRequest $request) {
        $user = User::create([
            'name' => $request->get('name'),
            'email' =>$request->get('email'),
            'password' => bcrypt( $request->get('password')),
        ]);

        return response(['user' => $user]);
    }

    public function login(LoginRequest $request) {
    if(!auth()->attempt($request->all())) {

        return  response(['message' => "this combination of email and password is inccorect, try again or sign up"]);
    };
    $token = auth()->user()->createToken('Api_token')->accessToken;
        return response(['user' => auth()->user(), 'token' => $token]);


    }

    public function fillBalance(FillBalaneRequest $request) {

        $user_id = $request->get('user_id');

          if($user_id == Auth::id()){
            $amount = Amount::create([
                'amount' => $request->get('amount'),
                'user_id' => $request->get('user_id'),

            ]);
            return response(['amount' => $amount] );
        }
            else {
                echo "user does not exist, current user_id is  -".' '.Auth::id();
            }
    }

    public function transfer(TransferRequest $request){
            $amount = $request->get('amount');
            $user_id  = $request->get('user_id');
            $uer_amount=Amount::findOrFail(Auth::id())->amount;

            return $uer_amount - $amount;
    }
}
