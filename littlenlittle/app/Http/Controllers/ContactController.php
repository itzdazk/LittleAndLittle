<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'long_des' => $request->input('long_des')
        ]);
        return redirect('/lienhe')->with('message', 'Gửi liên hệ thành công!');
    }
}
