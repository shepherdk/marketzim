<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function blogDetails(){
        return view('pages.blog-Details');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function error404(){
        return view('pages.error404');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function myAccount(){
        return view('pages.my-account');
    }

    public function portfolioDetails(){
        return view('pages.portfolio-details');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function shopGrid(){
        return view('pages.shop-grid');
    }

    public function singleProduct(){
        return view('pages.single-product');
    }

    public function team(){
        return view('pages.team');
    }

    public function wishlist(){
        return view('pages.wishlist');
    }

}
