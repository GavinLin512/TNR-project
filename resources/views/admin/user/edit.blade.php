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
            <li><a href="{{ asset('TNR-admin/user/edit') }}">編輯會員</a></li>
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
                    <h2>{{ __('編輯會員') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ asset('/TNR-admin/user/update') }}/{{ $record->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('角色權限') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" id="role" name="role" disabled>
                                    <option @if ($record->role == 'admin') selected @endif>admin</option>
                                    <option @if ($record->role == 'user') selected @endif>user</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('修改姓名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $record->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('修改新暱稱') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text"
                                    class="form-control" @if ($record->role == 'admin') disabled @endif name="nickname"
                                    value="{{ $record->client->nickname?? '' }}" required autocomplete="nickname" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail 地址') }}</label>

                            <div class="col-md-6">
                                {{-- 拿掉 name 讓使用者不能修改， value 顯示用，@error 也拿掉，送出不會出錯 --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $record->email }}" autocomplete="email" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('修改聯絡電話') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" @if ($record->role == 'admin') disabled @endif name="phone"
                                    value="{{ $record->client->phone ?? '' }}" required autocomplete="phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('修改聯絡地址') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" @if ($record->role == 'admin') disabled @endif
                                    name="address" value="{{ $record->client->address ?? '' }}" required
                                    autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('修改密碼') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('再次確認修改密碼') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-info btn-rounded"><i
                                        class="mdi mdi-upload"></i>
                                    {{ __('更新') }}
                                </button>
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
