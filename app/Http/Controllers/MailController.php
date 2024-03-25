<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request){
        $mailData= [
            'title'=>$request->title,
            'body'=>$request->body
        ];
        Mail::to($request->to)->send(new DemoMail($mailData));
        return view('formsend',['request'=>$request]);
    }
}
