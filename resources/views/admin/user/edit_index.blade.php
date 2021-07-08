@extends('layouts.app')

@section('title', 'TNR編輯會員')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title">會員管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">會員管理</a></li>
            <li><a class="text-muted" aria-current="page">編輯會員</a></li>
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
                    <h2>{{ __('編輯會員') }}</h2>
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
                                <th>操作</th>
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
                                    {{-- ??'' 如果找不到資料就顯示空白，防呆用 --}}
                                    <td>{{ $item->client->phone ?? '' }}</td>
                                    <td>{{ $item->client->address ?? '' }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ asset('/TNR-admin/user/edit') }}/{{ $item->id }}">編輯</a>
                                        <form style="display: inline-block"
                                            action="{{ asset('/TNR-admin/user/delete') }}/{{ $item->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">刪除</button>
                                        </form>
                                    </td>
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





























