@extends('layouts.app')

@section('title', 'TNR編輯最新消息')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('page-header')
    <h4 class="page-title" style="width: 140px">最新消息管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">最新消息管理</a></li>
            <li><a href="{{ asset('TNR-admin/news/edit') }}">編輯最新消息</a></li>
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
                <h2>{{ __('編輯最新消息') }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/TNR-admin/news/update') }}/{{ $record->id }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="publish_date">{{ __('日期') }}</label>
                        <input id="publish_date" type="date" class="form-control " name="publish_date" value="{{ $record->publish_date }}" required
                            autocomplete="publish_date" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="title">{{ __('標題') }}</label>
                        <input id="title" type="text" class="form-control " name="title" value="{{ $record->title }}" required
                            autocomplete="title" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="img" class="mb-2">{{ __('圖片') }}</label><br>
                        <img style="width: 200px" src="{{ asset($record->img) }}" alt="" class="mb-3">
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

                    <div class="form-group">
                        <label for="content">{{ __('內容') }}</label>
                        <textarea class="form-control" id="content" rows="8" name="content">{{ $record->content }}</textarea>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-outline-info btn-rounded"><i
                                    class="mdi mdi-upload"></i>
                                {{ __('更新') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('js/summernote-zh-TW.js') }}"></script>
<script>
    $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                lang: 'zh-TW',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline','fontsize', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'video']],
                    ['view', ['codeview', 'help']],
                ],
                placeholder: '請在這裡輸入內文'
            });
        });
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





























