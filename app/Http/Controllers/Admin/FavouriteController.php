<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->favorite_posts;
        return view('admin.favourite',compact('posts'));
    }
}
