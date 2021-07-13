@extends('layouts.app')

@section('title', 'TNR編輯待助養貓咪')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="width: 160px">待助養貓咪管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">待助養貓咪管理</a></li>
            <li><a class="text-muted" aria-current="page">編輯待助養貓咪</a></li>
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
                <h2>{{ __('編輯待助養貓咪') }}</h2>
            </div>

            <div class="card-body">
                <table id="my-datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10%">貓咪名字</th>
                            <th style="width: 15%">助養者暱稱</th>
                            <th style="width: 50%">貓咪影片連結</th>
                            <th style="width: 10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->client->nickname }}</td>
                                @php
                                    $truncated_videoUrl = Str::limit($item->video_url ?? '', 20);
                                @endphp
                                <td>{{ $truncated_videoUrl }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-fw btn-rounded mb-3"
                                        href="{{ asset('/TNR-admin/sponsored_cat/edit') }}/{{ $item->id }}"><i
                                        class="mdi mdi-file-document"></i>編輯</a>
                                    <form style="display: inline-block"
                                        action="{{ asset('/TNR-admin/sponsored_cat/delete') }}/{{ $item->id }}" method="POST">
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
                            <th>貓咪名字</th>
                            <th>助養者暱稱</th>
                            <th>貓咪影片連結</th>
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





























