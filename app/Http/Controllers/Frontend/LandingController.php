<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home.index');
    }

    public function about()
    {
        return view('pages.frontend.about.index');
    }

    public function products()
    {
        return view('pages.frontend.product.index');
    }

    public function productsCategory()
    {
        return view('pages.frontend.product.category');
    }

     public function productsCategory2()
    {
        return view('pages.frontend.product.category2');
    }

    public function detailProduct()
    {
        return view('pages.frontend.product.detail');
    }

    public function gallery()
    {
        return view('pages.frontend.gallery.index');
    }

    public function contact()
    {
        return view('pages.frontend.contact.index');
    }
}
