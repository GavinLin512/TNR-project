<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\FileController;

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
        $lists = News::get();
        return view($this->index, compact('lists'));
    }

    public function editIndex()
    {
        $lists = News::get();
        return view($this->editIndex, compact('lists'));
    }

    public function edit($id)
    {
        $record = News::find($id);
        return view($this->edit, compact('record'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // dd($requestData);
        $old_newsData = News::find($id);

        if ($request->hasFile('img')) {
            File::delete(public_path().$old_newsData->img);
            $path = FileController::imageUpload($request->file('img'),'news');
            $requestData['img'] = $path;
        }

        $old_newsData->update($requestData);

        return redirect('/TNR-admin/news/edit')->with('message', '編輯最新消息成功！');
    }

    public function create()
    {
        return view($this->create);
    }

    public function store(Request $request)
    {
        // dd($request);
        if ($request->hasFile('img')) {
            $path = FileController::imageUpload($request->file('img'),'news');
        }

        News::create([

            'publish_date' => date("Y-m-d"),
            'title' => $request->title,
            'img' => $path ?? '',
            'content' => $request->content
        ]);

        return redirect('/TNR-admin/news')->with('message', '新增最新消息成功！');
    }

    public function delete($id)
    {
        $old_record = News::find($id);
        File::delete(public_path().$old_record->img);
        $old_record->delete();

        return redirect('/TNR-admin/news')->with('message', '刪除最新消息成功！');
    }
}
