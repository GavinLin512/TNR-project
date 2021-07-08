<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.news.index';
        $this->create = 'admin.news.create';
        $this->editIndex = 'admin.news.edit_index';
        $this->edit = 'admin.news.edit';
    }

    public function index()
    {
        // $lists = User::get();
        return view($this->index);
    }

    public function editIndex()
    {
        // $lists = User::get();
        return view($this->editIndex);
    }

    public function edit($id)
    {
        // $record = User::find($id);

        return view($this->edit);
    }

    public function create()
    {
        // $record = User::get();
        return view($this->create);
    }
}
