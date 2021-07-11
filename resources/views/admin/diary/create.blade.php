@extends('layouts.app')

@section('title', 'TNR新增貓貓日記')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 140px">貓貓日記管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">貓貓日記管理</a></li>
            <li><a class="text-muted" aria-current="page">新增貓貓日記</a></li>
        </ul>
        <ul class="quick-links ml-auto">
            <li><a href="#">設定</a></li>
        </ul>
    </div>
@endsection

@section('main')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('新增貓貓日記') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ asset('/TNR-admin/diary/store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- date --}}
                        <div class="form-group">
                            <label for="publish_date">{{ __('日期') }}</label>
                            <input id="publish_date" type="date" class="form-control " name="publish_date" required
                                autocomplete="publish_date" autofocus>
                        </div>
                        {{-- assistant_category --}}
                        <div class="form-group">
                            <label for="assistant_category">{{ __('日記分類') }}</label>
                            <select class="form-control" id="assistant_category" name="assistant_category">
                                @foreach ($categories as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- title --}}
                        <div class="form-group">
                            <label for="title">{{ __('標題') }}</label>
                            <input id="title" type="text" class="form-control " name="title" required autocomplete="title"
                                autofocus>
                        </div>
                        {{-- img --}}
                        <div class="form-group">
                            <label for="img">{{ __('圖片') }}</label>
                            <div class="input-group col-xs-12">
                                <label class="file-upload-browse btn btn-outline-info m-0">
                                    <input id="img" name="img" class="form-control" style="display:none;" type="file"
                                        autocomplete="img" autofocus>
                                    <i class="mdi mdi-upload"></i>上傳圖片
                                </label>
                                <input id="fake-input" type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="未選擇圖片" required autofocus>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="form-group">
                            <label for="content">{{ __('內容') }}</label>
                            <textarea class="form-control" id="content" rows="8" name="content"
                                style="height: 300px"></textarea>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-success btn-fw btn-rounded">
                                    <i class="mdi mdi-file-document"></i>新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // upload img input
        $('#img').change(function() {
            var img_filename = $('#img').val();
            if (img_filename.substring(3, 11) == 'fakepath') {
                img_filename = img_filename.substring(12);
            } // For Remove fakepath
            $("input[id='fake-input']").val('選擇檔案: ' + img_filename);
            if (img_filename == "") {
                $("input[id='fake-input']").val('請選擇一張圖片');
            }
        });
    </script>
@endsection
