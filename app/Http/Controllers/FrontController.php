<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function __construct()
    {
        $this->index = 'front.index';
        $this->login = 'front.index.login';
        $this->register = 'front.index.register';

        $this->productIndex = 'front.product.index';
        $this->step_1 = 'front.cart.step-1';
        $this->step_2 = 'front.cart.step-2';
        $this->step_3 = 'front.cart.step-3';
        $this->step_4 = 'front.cart.step-4';
    }

    public function index()
    {
        return view($this->index);
    }

    public function login()
    {
        return view($this->login);
    }

    public function register()
    {
        return view($this->register);
    }
}
