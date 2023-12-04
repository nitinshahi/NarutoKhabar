<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function index(){
        return view('contactus.contactus');
    }

    public function insert(Request $request){
        // dd($request);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'your_message' => 'required',
        ]);

        $contactus = new Contactus();
        $contactus->name = $request->name;
        $contactus->email = $request->email;
        $contactus->phone = $request->phone;
        $contactus->description = $request->your_message;
        $contactus->save();
        
        return view('contactus.contactus');


    }
}
