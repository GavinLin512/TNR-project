<?php

namespace App\Http\Controllers;

use App\SponsoredCat;
use App\User;
use App\UserClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SponsoredCatController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.sponsored.index';
        $this->create = 'admin.sponsored.create';
        $this->editIndex = 'admin.sponsored.edit_index';
        $this->edit = 'admin.sponsored.edit';
    }

    public function index()
    {
        $lists = SponsoredCat::with('client')->get();
        // dd($lists);
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = SponsoredCat::with('client')->get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = SponsoredCat::with('client')->find($id);
        // dd($record);
        $user = UserClient::get();
        // $user = SponsoredCat::assistant_category;
        return view($this->edit, compact('record','user'));
    }

    public function update(Request $request, $id)
    {
        // $requestData = $request->all();
        // dd($requestData);
        $old_sponsoredCatData = SponsoredCat::find($id);

        $old_sponsoredCatData->update([
            'name' => $request->name,
            'user_id' => $request->sponsor,
            'video_url' => $request->video_url
        ]);

        return redirect('/TNR-admin/sponsored_cat/edit')->with('message', '編輯待助養貓咪成功！');
    }

    public function create()
    {
        // $user = User::get();
        $user = UserClient::get();

        // dd($user);
        return view($this->create, compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request->sponsor);
        // SponsoredCat::create($request->all());
        SponsoredCat::create([
            'name' => $request->name,
            'user_id' => $request->sponsor,
            'video_url' => $request->video_url
        ]);

        return redirect('/TNR-admin/sponsored_cat/edit')->with('message', '新增待助養貓咪成功！');
    }

    public function delete($id)
    {
        $old_record = SponsoredCat::find($id);
        $old_record->delete();

        return redirect('/TNR-admin/sponsored_cat/edit')->with('message', '刪除待助養貓咪成功！');
    }
}
