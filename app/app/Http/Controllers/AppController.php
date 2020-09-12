<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function contact()
    {
        return view('contact');
    }

    public function check(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        return view('check', ['inputs' => $inputs]);
    }

    public function complete(Request $request, Contact $contact)
    {
        $contact->mail = $request->mail;
        $contact->name = $request->name;
        $contact->title = $request->title;
        $contact->text = $request->text;
        $contact->save();

        $to = [
            [
                'email' => $contact->mail, 
                'name' => 'お問合せありがとうございます',
            ]
        ];    
        Mail::to($to)->send(new SendMail());
        return view('complete');

    }

    public function prepare()
    {
        return view('prepare');
    }

    public function blog(Request $request)
    {
        return view('blog.index');
    }

    public function blogpost(Request $request)
    {
        return view('blog.blogpost');
    }
} 
