<?php

namespace App\Http\Controllers;

use App\Mail\Ordershipped;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {
        return view('email.send');
    }


    public function send(Request $request) {

    //    Mail::to($request->get('email'))->send();
    //    Mail::raw('giorgi samkharadze ', function ($message){
    //        $message->to('test123@gmail.com');
    //    });
        $user = User::find(1);
        $data = [
            'text' => 'sheni orderi gaigzavna',
            'user_name' => $user->name
        ];

        mail::to($request->get('email'))->send(new Ordershipped($data));
        echo 'გმაილი გაიგზავნა';

    }
}
