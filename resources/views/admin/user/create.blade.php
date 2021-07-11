@extends('layouts.app')

@section('title', 'TNR新增會員')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title ">會員管理</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="{{ asset('TNR-admin/dashboard') }}">管理總覽</a></li>
            <li><a class="text-muted">會員管理</a></li>
            <li><a class="text-muted" aria-current="page">新增會員</a></li>
        </ul>
        <ul class="quick-links ml-auto">
            <li><a href="#">設定</a></li>
        </ul>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('新增會員') }}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ asset('/TNR-admin/user/store') }}">
                            @csrf
                            {{-- role select --}}
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('角色權限') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="role" name="role">
                                        <option>admin</option>
                                        <option selected>user</option>
                                    </select>
                                </div>
                            </div>
                            {{-- name --}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('姓名') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- nickname --}}
                            <div class="form-group row">
                                <label for="nickname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('暱稱') }}</label>

                                <div class="col-md-6">
                                    <input id="nickname" type="text" class="form-control" name="nickname"
                                        value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail 信箱') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- phone --}}
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('電話') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control"
                                        name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('地址') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>
                                </div>
                            </div>
                            {{-- password --}}
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('密碼') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password-confirm --}}
                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('再次確認密碼') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-success btn-fw btn-rounded ">
                                        <i class="mdi mdi-file-document"></i>新增</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#role').change(function() {
                // console.log($(this).val());
                if ($(this).val() == 'admin') {
                    $('#phone').prop('disabled', true);
                    $('#address').prop('disabled', true);
                    $('#nickname').prop('disabled', true);
                } else {
                    $('#phone').prop('disabled', false);
                    $('#address').prop('disabled', false);
                    $('#nickname').prop('disabled', false);
                }
            });
        });
    </script>
@endsection
