<?php

namespace App\Http\Controllers;

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
    public function addproduct()
    {
        return view('addproduct'); // This will return the products.blade.php view
    }
    public function productDetails()
    {
        return view('productDetails'); // This will return the prooductDtails.blade.php view
    }
}
