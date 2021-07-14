@extends('layouts.app')

@section('title', 'TNR新增待捐罐貓咪')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 160px">待捐罐貓咪管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">待捐罐貓咪管理</a></li>
            <li><a class="text-muted" aria-current="page">新增待捐罐貓咪</a></li>
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
                <h2>{{ __('新增待捐罐咪') }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/TNR-admin/adopted_cat/store') }}">
                    @csrf
                    {{-- title --}}
                    <div class="form-group">
                        <label for="title">{{ __('標題') }}</label>
                        <input id="title" type="text" class="form-control " name="title" required autocomplete="title"
                            autofocus>
                    </div>
                    {{-- donate_price --}}
                    <div class="form-group">
                        <label for="donate_price">{{ __('每名捐款金額') }}</label>
                        <input id="donate_price" type="number" class="form-control " name="donate_price" required autocomplete="donate_price"
                            autofocus>
                    </div>
                    {{-- people_number --}}
                    <div class="form-group">
                        <label for="people_number">{{ __('需求人數') }}</label>
                        <input id="people_number" type="number" class="form-control " name="people_number" required autocomplete="people_number"
                            autofocus>
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

@endsection





























