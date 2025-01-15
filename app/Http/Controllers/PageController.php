<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about'); // This will return the about.blade.php view
    }

    public function products()
    {
        return view('products'); // This will return the products.blade.php view
    }
    public function cart()
    {
        return view('cart'); // This will return the products.blade.php view
    }
}
