<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public static function store(Request $request)
    {
        $userid = Auth::user()->account_id;
        $request['modified_at'] = Carbon::now()->toDateString();
        // $request['delete_flag'] = 0;
        if ($request['middle_name'] == null) {
            $validatedData = $request->validate([
                'role_id' => 'required',
                'gender_id' => 'required',
                'first_name' => 'required|alpha_num|max:25',
                'last_name' => 'required|alpha_num|max:25',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:8',
                'display_picture_link' => 'image|file',
                'modified_at' => 'required',
                'modified_by' => 'required'
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
                'modified_at' => 'required',
                'modified_by' => 'required'
            ]);
        }
        if ($request->file('display_picture_link')) {
            $validatedData['display_picture_link'] = $request->file('display_picture_link')->store('display_picture_link');
        } else {
            $validatedData['display_picture_link'] = Auth::user()->display_picture_link;
        }
        Account::where('account_id', $userid)
            ->update($validatedData);
        return redirect('/status-saved');
    }
}
