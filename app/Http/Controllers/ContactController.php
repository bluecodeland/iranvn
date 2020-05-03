<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Contacts;



class ContactController extends Controller
{
    public function create(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject'=>'required',
        'text' => 'required'
        ]);
       Contacts::create($request->all());
       return back()->with('success', 'Thanks for contacting us!');
   }

}
