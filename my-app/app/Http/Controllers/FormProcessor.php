<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $data = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
        ];

        //return response()->json($data);
        return redirect()->route('hello', ['first_name' => $firstName]);
    }

    public function hello($first_name)
    {
        return view('hello', ['first_name' => $first_name]); // передаем имя в представление
    }
}
