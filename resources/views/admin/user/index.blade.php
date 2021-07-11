@extends('layouts.app')

@section('title', 'TNR會員管理')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title">會員管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">會員管理</a></li>
            <li><a class="text-muted" aria-current="page">會員總覽</a></li>
        </ul>
        <ul class="quick-links ml-auto">
            <li><a href="#">設定</a></li>
        </ul>
    </div>
@endsection

@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('會員總覽') }}</h2>
                </div>
                <div class="card-body">
                    <table id="my-datatable" class="display table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>姓名</th>
                                <th>暱稱</th>
                                <th>信箱</th>
                                <th>角色</th>
                                <th>電話</th>
                                <th>地址</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $item)
                                <tr
                                    class="<?php echo $item->role == 'admin' ? 'table-danger' : 'table-success'; ?>">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->client->nickname ?? '' }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->client->phone ?? '' }}</td>
                                    @php
                                        $truncated_address = Str::limit($item->client->address ?? '', 40);
                                        // dd($truncated );
                                    @endphp
                                    <td>{{ $truncated_address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>姓名</th>
                                <th>暱稱</th>
                                <th>信箱</th>
                                <th>角色</th>
                                <th>電話</th>
                                <th>地址</th>
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
