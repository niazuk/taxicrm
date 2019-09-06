<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormRegisterController extends Controller
{
    //
     public function store(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }
}
