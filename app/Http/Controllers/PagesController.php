<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //require_once base_path() . '/vendor/autoload.php';
        // $paynow = new \Paynow\Payments\Paynow(
        //     '5782',
        //     '28b1a543-9ed2-431c-895e-469ce6c5e88b',
        //     // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
        //     '/',
        //     '/'
        // );
        // $payment = $paynow->createPayment('Invoice 35', 'user@example.com');
        // $payment->add('Bananas', 2.50);
        // $payment->add('Apples', 3.40);
        // $response = $paynow->send($payment);
        // if($response->success()) {
        //     // Redirect the user to Paynow
        //     $url = $response->redirectUrl();
        //     return redirect($url);

        //     // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
        //     // $link = $response->redirectLink();

        //     // Get the poll url (used to check the status of a transaction). You might want to save this in your DB
        //     $pollUrl = $response->pollUrl();
        //     echo 'hehee';
        // }
        // else {
        //     die('not working');
        // }
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function blogDetails(){
        return view('pages.blog-details');
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
