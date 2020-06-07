<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function login(Request $request) {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*
            Add mail functionality here.
        */

        return response()->json(null, 200);
    }
    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|password',
            'confirmPassword' => 'required'
        ]);

        /*
            Add mail functionality here.
        */

        return response()->json(null, 200);
    }
}
