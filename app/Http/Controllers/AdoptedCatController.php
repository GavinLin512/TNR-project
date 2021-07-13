<?php

namespace App\Http\Controllers;

use App\AdoptedCat;
use Illuminate\Http\Request;

class AdoptedCatController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.adopted.index';
        $this->create = 'admin.adopted.create';
        $this->editIndex = 'admin.adopted.edit_index';
        $this->edit = 'admin.adopted.edit';
    }

    public function index()
    {
        $lists = AdoptedCat::get();
        // dd($lists);
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = AdoptedCat::get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = AdoptedCat::find($id);
        $gender = AdoptedCat::GENDER;
        $vaccine = AdoptedCat::VACCINE;
        $location = AdoptedCat::LOCATION;
        // dd($record->gender);
        // $user = UserClient::get();

        return view($this->edit, compact('record','gender', 'vaccine', 'location'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // dd($requestData);
        $old_adoptedCatData = AdoptedCat::find($id);

        $old_adoptedCatData->update($requestData);

        return redirect('/TNR-admin/adopted_cat/edit')->with('message', '編輯待領養貓咪成功！');
    }

    public function create()
    {
        $gender = AdoptedCat::GENDER;
        $vaccine = AdoptedCat::VACCINE;
        $location = AdoptedCat::LOCATION;

        // dd($user);
        return view($this->create, compact('gender', 'vaccine', 'location'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // AdoptedCat::create($request->all());
        AdoptedCat::create($request->all());

        return redirect('/TNR-admin/adopted_cat')->with('message', '新增待領養貓咪成功！');
    }

    public function delete($id)
    {
        $old_record = AdoptedCat::find($id);
        $old_record->delete();

        return redirect('/TNR-admin/adopted_cat/edit')->with('message', '刪除待領養貓咪成功！');
    }
}
