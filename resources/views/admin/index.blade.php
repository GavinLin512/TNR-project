@extends('layouts.app')

@section('title', 'TNR後台管理首頁')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="w">管理總覽</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
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
                <h1 class="col-12">歡迎來到TNR後台管理系統</h1>
            </div>
            <div class="card-body d-flex justify-content-center">
                <img src="{{ asset('img/nav/logo big.png') }}" alt="" class="col-8 mx-auto">
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/chart.js') }}"></script>

@endsection





























