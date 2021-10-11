<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
      public function index(Request $request)
      {
        die("TO BE.");
        echo $request->name;
        echo $request->email;
        echo $request->subject;
        echo $request->content;
      
        $array = [
              'name'=>$request->input('name'),
              'email'=>$request->input('email'),
              'telefon'=>$request->input('subject'),
              'mesaj'=>$request->get('content')
          ];
          mail::send('iletisim', $array, function ($message) {
              $message->from($request->input('email'), 'Web Sitesi İletişim');
              $message->subject($request->input('subject'));
              //$message->to("cumacelal@gmail.com");
          });
      }
}
