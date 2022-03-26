<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
    
    public function send(Request $req)
    {
    $req->validate([

        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required'
        ]);   
        $mail_data = [

            'recipient'=>'rashmikumari215@gmail.com',
            'toEmail'=>$req->email,
            'fromName'=>$req->name,
            'subject'=>$req->subject,
            'body'=>$req->message
        ];
        \Mail::send('email',$mail_data,function($message) use ($mail_data){
            $message->to($mail_data['toEmail'])
                    ->from($mail_data['recipient'],$mail_data['fromName'])
                    ->subject($mail_data['subject']);
        });

        return redirect()->back()->with('success','Email Sent!');

    }

}
