<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class ContactController extends Controller
{
    public function contact(Request $request){
         Mail::send('contact', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'messege' => $request->get('messege'),
    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('hamza@gmail.com', 'Hello Admin')->subject($request->get('name'));
     
}); 
return back()->with('success','You have successfuly send the mail');
    }
}
