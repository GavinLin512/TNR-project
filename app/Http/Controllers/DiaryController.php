<?php

namespace App\Http\Controllers;

use App\Diary;
use App\AssistantCategory;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DiaryController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.diary.index';
        $this->create = 'admin.diary.create';
        $this->editIndex = 'admin.diary.edit_index';
        $this->edit = 'admin.diary.edit';
    }

    public function index()
    {
        $lists = Diary::get();
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = Diary::get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = Diary::find($id);
        $categories = Diary::assistant_category;
        return view($this->edit, compact('record', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // dd($requestData);
        $old_diaryData = Diary::find($id);

        if ($request->hasFile('img')) {
            File::delete(public_path().$old_diaryData->img);
            $path = FileController::imageUpload($request->file('img'),'diary');
            $requestData['img'] = $path;
        }

        $old_diaryData->update($requestData);

        return redirect('/TNR-admin/diary/edit')->with('message', '編輯最新消息成功！');
    }

    public function create()
    {
        $categories = Diary::assistant_category;
        return view($this->create, compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request);
        if ($request->hasFile('img')) {
            $path = FileController::imageUpload($request->file('img'),'diary');
        }
        // dd($request->content);
        Diary::create([
            'assistant_category' => $request['assistant_category'],
            'publish_date' => $request->publish_date,
            'title' => $request->title,
            'img' => $path ?? '',
            'content' => $request->content
        ]);

        return redirect('/TNR-admin/diary')->with('message', '新增最新消息成功！');
    }

    public function delete($id)
    {
        $old_record = Diary::find($id);
        File::delete(public_path().$old_record->img);
        $old_record->delete();

        return redirect('/TNR-admin/diary/edit')->with('message', '刪除最新消息成功！');
    }
}
