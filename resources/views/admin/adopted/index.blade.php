@extends('layouts.app')

@section('title', 'TNR待領養貓咪管理')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 160px">待領養貓咪管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">待領養貓咪管理</a></li>
            <li><a class="text-muted" aria-current="page">待領養貓咪總覽</a></li>
        </ul>
        <ul class="quick-links ml-auto">
            <li><a href="#">設定</a></li>
        </ul>
    </div>
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ __('待領養貓咪總覽') }}</h2>
            </div>

            <div class="card-body">
                <table id="my-datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10%">貓咪名字</th>
                            <th style="width: 10%">貓咪性別</th>
                            <th style="width: 10%">貓咪年齡</th>
                            <th style="width: 10%">所在縣市</th>
                            <th style="width: 10%">是否打預防針</th>
                            <th style="width: 25%">貓咪影片連結</th>
                            <th style="width: 25%">領養細節說明</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->vaccine }}</td>
                                @php
                                    $truncated_videoUrl = Str::limit($item->video_url ?? '', 20);
                                @endphp
                                <td>{{ $truncated_videoUrl }}</td>
                                @php
                                    $truncated_content = Str::limit($item->content ?? '', 20);
                                @endphp
                                <td>{{ $item->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>貓咪名字</th>
                            <th>貓咪性別</th>
                            <th>貓咪年齡</th>
                            <th>所在縣市</th>
                            <th>是否打預防針</th>
                            <th>貓咪影片連結</th>
                            <th>領養細節說明</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#my-datatable').DataTable({
            "ordering": true,
        });
    });
</script>
@endsection





























