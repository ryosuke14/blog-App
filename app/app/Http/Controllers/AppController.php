<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

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
        dd($inputs);
        return view('check', ['inputs' => $inputs]);
    }

    public function complete(ContactRequest $request, Contact $contact)
    {
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->title = $request->title;
        $contact->text = $request->text;
        $contact->save();
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
