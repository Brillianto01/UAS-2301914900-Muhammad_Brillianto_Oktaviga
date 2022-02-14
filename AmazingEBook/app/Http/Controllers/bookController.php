<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public static function index()
    {
        return view('home', ['books' => EBook::paginate(10)]);
    }

    public static function detail($ebook_id)
    {
        $detail = EBook::where('ebook_id', $ebook_id)->first();
        // dd($ebook_id);
        // dd($detail);
        return view('details', ['book' => $detail]);
    }
}
