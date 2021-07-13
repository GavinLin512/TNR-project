@extends('layouts.app')

@section('title', 'TNR新增領養貓咪')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 160px">待領養貓咪管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">待領養貓咪管理</a></li>
            <li><a class="text-muted" aria-current="page">新增待領養貓咪</a></li>
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
                    <h2>{{ __('新增待領養貓咪') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ asset('/TNR-admin/adopted_cat/store') }}">
                        @csrf
                        {{-- name --}}
                        <div class="form-group">
                            <label for="name">{{ __('貓咪名字') }}</label>
                            <input id="name" type="text" class="form-control " name="name" required autocomplete="name"
                                autofocus>
                        </div>
                        {{-- gender --}}
                        <div class="form-group">
                            <label for="gender">{{ __('貓咪性別') }}</label><br>
                            <div class="col-12 d-flex">
                                @foreach ($gender as $key => $value)
                                    <input id="gender" type="radio" class="form-control mr-2" name="gender" style="width: 20px"
                                        required autocomplete="gender" autofocus value="{{ $value }}">
                                    <p class="mr-2 d-flex align-items-center mb-0">{{ $value }}</p>
                                @endforeach
                            </div>

                        </div>
                        {{-- age --}}
                        <div class="form-group">
                            <label for="age">{{ __('貓咪年齡') }}</label>
                            <input id="age" type="text" class="form-control " name="age" required autocomplete="age"
                                autofocus>
                        </div>
                        {{-- location --}}
                        <div class="form-group">
                            <label for="location">{{ __('所在縣市') }}</label>
                            <select class="form-control" id="location" name="location">
                                @foreach ($location as $key => $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- vaccine --}}
                        <div class="form-group">
                            <label for="vaccine">{{ __('是否有打預防針') }}</label>
                            <div class="col-12 d-flex">
                                @foreach ($vaccine as $key => $value)
                                    <input id="vaccine" type="radio" class="form-control mr-2" name="vaccine" style="width: 20px"
                                        required autocomplete="vaccine" autofocus value="{{ $value }}">
                                    <p class="mr-2 d-flex align-items-center mb-0">{{ $value }}</p>
                                @endforeach
                            </div>

                        </div>
                        {{-- video_url --}}
                        <div class="form-group">
                            <label for="video_url">{{ __('貓咪影片網址') }}</label>
                            <textarea class="form-control" id="video_url" rows="8" name="video_url"
                                style="height: 100px"></textarea>
                        </div>
                        {{-- content --}}
                        <div class="form-group">
                            <label for="content">{{ __('領養細節說明') }}</label>
                            <textarea class="form-control" id="content" rows="8" name="content"
                                style="height: 200px"></textarea>
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
