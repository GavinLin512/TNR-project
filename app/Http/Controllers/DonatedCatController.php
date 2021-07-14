<?php

namespace App\Http\Controllers;

use App\DonatedCat;
use Illuminate\Http\Request;

class DonatedCatController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.donated.index';
        $this->create = 'admin.donated.create';
        $this->editIndex = 'admin.donated.edit_index';
        $this->edit = 'admin.donated.edit';
    }

    public function index()
    {
        $lists = DonatedCat::get();
        // dd($lists);
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = DonatedCat::get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = DonatedCat::find($id);

        return view($this->edit, compact('record','gender', 'vaccine', 'location'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // dd($requestData);
        $old_donatedCatData = DonatedCat::find($id);

        $old_donatedCatData->update($requestData);

        return redirect('/TNR-admin/donated_cat/edit')->with('message', '編輯待領養貓咪成功！');
    }

    public function create()
    {

        // dd($user);
        return view($this->create);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // donatedCat::create($request->all());
        DonatedCat::create($request->all());

        return redirect('/TNR-admin/donated_cat')->with('message', '新增待領養貓咪成功！');
    }

    public function delete($id)
    {
        $old_record = DonatedCat::find($id);
        $old_record->delete();

        return redirect('/TNR-admin/donated_cat/edit')->with('message', '刪除待領養貓咪成功！');
    }
}
