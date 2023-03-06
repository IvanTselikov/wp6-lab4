<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    function submit(Request  $request) {
        $validation = $request->validate([
            'firstName' => 'required|'
        ]);
    }
}
