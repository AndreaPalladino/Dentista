<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
      //
    }
    public function create(){
        return view('contacts.create');
    }
    public function store(Request $request){
        $contact= new Contact();
        
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');

        $contact->save();
        return redirect(route('thank-you'));
    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
