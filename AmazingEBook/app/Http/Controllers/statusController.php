<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusController extends Controller
{
    public function success()
    {
        $message = 'SUCCESS!';
        return view('status', ['message' => $message]);
    }

    public function saved()
    {
        $message = 'SAVED!';
        return view('status', ['message' => $message]);
    }
    public function logout()
    {
        $message = 'LOG OUT SUCCESSFUL';
        return view('status', ['message' => $message]);
    }
}
