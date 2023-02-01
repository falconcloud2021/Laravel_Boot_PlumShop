<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexPage()
    {
        return view('shop.index');
    }

    public function blog()
    {
        return view('shop.blog');
    }

}
