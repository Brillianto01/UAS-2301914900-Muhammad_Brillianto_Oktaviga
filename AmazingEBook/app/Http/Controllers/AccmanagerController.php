<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccmanagerController extends Controller
{
    public static function index()
    {
        // $account = Account::where('delete_flag', null)->get();
        // dd($account);

        return view('accmanager', ['account' => Account::where('delete_flag', null)->simplepaginate(10)]);
    }

    public static function roleupdate($account_id)
    {
        return view('adminupdate', ['account' => Account::where('account_id', $account_id)->first()]);
    }

    public static function update(Request $request)
    {
        $request['modified_at'] = Carbon::now()->toDateString();
        $id = $request->account_id;
        $role_id = $request->role_id;
        $date = $request->modified_at;
        $by = $request->modified_by;
        // dd($request);

        $account = Account::find($id);
        $account->role_id = $role_id;
        $account->modified_at = $date;
        $account->modified_by = $by;
        $account->update();
        // Account::where('account_id', $userid);
        return redirect('/status-saved');
    }

    public static function delete(Request $request)
    {
        $request['modified_at'] = Carbon::now()->toDateString();
        $id = $request->account_id;
        $date = $request->modified_at;
        $by = $request->modified_by;
        $flag = $request->delete_flag;

        $account = Account::find($id);
        $account->modified_at = $date;
        $account->modified_by = $by;
        $account->delete_flag = $flag;
        $account->update();
        // Account::where('account_id', $userid);
        return redirect('/status-success');
    }
}
