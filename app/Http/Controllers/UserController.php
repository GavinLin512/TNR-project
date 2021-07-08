<?php

namespace App\Http\Controllers;

use App\User;
use App\UserClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.user.index';
        $this->create = 'admin.user.create';
        $this->editIndex = 'admin.user.edit_index';
        $this->edit = 'admin.user.edit';
    }

    public function index()
    {
        $lists = User::get();
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = User::get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = User::find($id);

        return view($this->edit, compact('record'));
    }

    public function create()
    {
        $record = User::get();
        return view($this->create, compact('record'));
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            // '欄位' => ['驗證規則']
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:App\User,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // dd($v);
        // dd($v->fails());

        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        // $old_record = User::find($id);


        $new_record = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),// 明碼經過hash函數轉換變暗碼儲存，且不可逆
            'role' => $request['role'],
        ]);

        if ($request->role == 'user') {
            UserClient::create([
                'phone' => $request['phone'],
                'address' => $request['address'],
                'user_id' => $new_record->id,
                'nickname' => $request['nickname']
            ]);
        }

        return redirect('/TNR-admin/user')->with('message', '新增會員成功！');
    }
}
