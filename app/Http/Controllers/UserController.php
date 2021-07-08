<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.user.index';
        $this->create = 'admin.user.create';
        $this->edit = 'admin.user.edit';
    }

    public function index()
    {
        $lists = User::get();
        return view($this->index, compact('lists'));
    }
}
