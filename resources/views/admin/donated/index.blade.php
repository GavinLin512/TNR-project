@extends('layouts.app')

@section('title', 'TNR領養貓咪管理')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 160px">待捐罐貓咪管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">待捐罐貓咪管理</a></li>
            <li><a class="text-muted" aria-current="page">待捐罐貓咪總覽</a></li>
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
                <h2>{{ __('待捐罐貓咪總覽') }}</h2>
            </div>

            <div class="card-body">
                <table id="my-datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 50%">標題</th>
                            <th style="width: 25%">每名捐款金額</th>
                            <th style="width: 25%">需求人數</th>
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
                            <th>標題</th>
                            <th>每名捐款金額</th>
                            <th>需求人數</th>
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





























