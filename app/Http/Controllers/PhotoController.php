<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $items = Photo::all();
        return view('hello.index',['items' => $items]);
    }
}
