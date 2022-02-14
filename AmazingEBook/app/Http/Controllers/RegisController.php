<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisController extends Controller
{
    public function store(Request $request)
    {
        $request['delete_flag'] = 0;
        if ($request['middle_name'] == null) {
            $validatedData = $request->validate([
                'role_id' => 'required',
                'gender_id' => 'required',
                'first_name' => 'required|alpha_num|max:25',
                'last_name' => 'required|alpha_num|max:25',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:8',
                'display_picture_link' => 'image|file',
            ]);
        } else {
            $validatedData = $request->validate([
                'role_id' => 'required',
                'gender_id' => 'required',
                'first_name' => 'required|alpha_num|max:25',
                'middle_name' => 'alpha_num|max:25',
                'last_name' => 'required|alpha_num|max:25',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:8',
                'display_picture_link' => 'image|file',
            ]);
        }

        $validatedData['display_picture_link'] = $request->file('display_picture_link')->store('display-images');
        $validatedData['password'] = Hash::make($validatedData['password']);
        // dd($validatedData);
        // $validatedData['profile_img'] = 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        Account::create($validatedData);
        // $request->session()->flash('success', 'Registration was successful');
        return redirect('/login');
    }
}
