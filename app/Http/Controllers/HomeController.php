<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{


    public function index()
    {
        return view('home.userpage');
    }

    public function account()
    {
        return view('home.account');
    }
    public function cart()
    {
        return view('home.cart');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function about()
    {
        return view('home.about');
    }
    public function shop()
    {
        return view('home.shop');
    }

    public function indie()
    {
        return view('home.indie');
    }
    public function hiphop()
    {
        return view('home.hiphop');
    }
    public function jazz()
    {
        return view('home.jazz');
    }
    public function pop()
    {
        return view('home.pop');
    }
    public function randb()
    {
        return view('home.r&b');
    }
    
    public function rock()
    {
        return view('home.rock');
    }




    public function product()
    {
        return view('home.product');
    }
    
    public function product2()
    {
        return view('home.product2');
    }   

    public function product3()
    {
        return view('home.product3');
    }
    public function product4()
    {
        return view('home.product4');
    }
    public function product5()
    {
        return view('home.product5');
    }
    public function product6()
    {
        return view('home.product6');
    }
    public function product7()
    {
        return view('home.product7');
    }
    public function product8()
    {
        return view('home.product8');
    }
    public function product9()
    {
        return view('home.product9');
    }
    public function product10()
    {
        return view('home.product10');
    }
    public function product11()
    {
        return view('home.product11');
    }
    public function product12()
    {
        return view('home.product12');
    }
    public function product13()
    {
        return view('home.product13');
    }
    public function product14()
    {
        return view('home.product14');
    }
    public function product15()
    {
        return view('home.product15');
    }
    public function product16()
    {
        return view('home.product16');
    }
    public function product17()
    {
        return view('home.product17');
    }

    public function product18()
    {
        return view('home.product18');
    }
    public function product19()
    {
        return view('home.product19');
    }
    public function product20()
    {
        return view('home.product20');
    }
    public function product21()
    {
        return view('home.product21');
    }
    

    public function redirect()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {

            return view('admin.home');
        }

        else 
            {   
                return view('home.userpage');
            }
    }
}
