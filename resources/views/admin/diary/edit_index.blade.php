@extends('layouts.app')

@section('title', 'TNR編輯貓貓日記')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 140px">貓貓日記管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">貓貓日記管理</a></li>
            <li><a class="text-muted" aria-current="page">編輯貓貓日記</a></li>
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
                <h2>{{ __('編輯貓貓日記') }}</h2>
            </div>

            <div class="card-body">
                <table id="my-datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10%">日期</th>
                            <th style="width: 10%">分類</th>
                            <th style="width: 20%">標題</th>
                            <th style="width: 20%">圖片</th>
                            <th style="width: 30%">內容</th>
                            <th style="width: 10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $item)
                            <tr>
                                <td>{{ $item->publish_date }}</td>
                                <td>{{ $item->assistant_category }}</td>
                                @php
                                    $truncated_title = Str::limit($item->title ?? '', 20);
                                @endphp
                                <td>{{ $truncated_title }}</td>
                                <td>
                                    <img style="width: 200px" src="{{ asset($item->img) }}" alt="">
                                </td>
                                @php
                                    $truncated_content = Str::limit($item->content ?? '', 40);
                                @endphp
                                <td>{{ $truncated_content }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-fw btn-rounded mb-3"
                                        href="{{ asset('/TNR-admin/diary/edit') }}/{{ $item->id }}"><i
                                        class="mdi mdi-file-document"></i>編輯</a>
                                    <form style="display: inline-block"
                                        action="{{ asset('/TNR-admin/diary/delete') }}/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger btn-fw btn-rounded"><i
                                            class="mdi mdi-alert-outline"></i>刪除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>日期</th>
                            <th>分類</th>
                            <th>標題</th>
                            <th>圖片</th>
                            <th>內容</th>
                            <th>操作</th>
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





























