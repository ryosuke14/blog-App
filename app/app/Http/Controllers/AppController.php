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

    public function check(ContactRequest $request)
    {
        $inputs = $request->all();
        return view('check', ['inputs' => $inputs]);
    }

    public function complete(ContactRequest $request, Contact $contact)
    {
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
