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
            <li><a href="{{ asset('TNR-admin/sponsored_cat/edit') }}">編輯待助養貓咪</a></li>
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
                    <h2>{{ __('編輯待助養貓咪') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ asset('/TNR-admin/sponsored_cat/update') }}/{{ $record->id }}">
                        @csrf
                        {{-- date --}}
                        <div class="form-group">
                            <label for="name">{{ __('貓咪名字') }}</label>
                            <input id="name" type="text" class="form-control " name="name" required autocomplete="name"
                                autofocus value="{{ $record->name }}">
                        </div>
                        {{-- sponsor --}}
                        <div class="form-group">
                            <label for="sponsor">{{ __('助養者暱稱') }}</label>
                            <input class="form-control" id="sponsor" type="text" required autocomplete="sponsor" autofocus
                                list="sponsor_list" value="{{ $record->client->nickname }}">
                            <datalist id="sponsor_list" name="sponsor">
                                @foreach ($user as $item)
                                    <option data-value="{{ $item->user_id }}">{{ $item->nickname }}</option>
                                @endforeach
                            </datalist>
                            <input type="hidden" name="sponsor" id="sponsor-hidden">
                        </div>
                        {{-- video_url --}}
                        <div class="form-group">
                            <label for="video_url">{{ __('貓咪影片網址') }}</label>
                            <textarea class="form-control" id="video_url" rows="8" name="video_url"
                                style="height: 200px">{{ $record->video_url }}</textarea>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
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
    <script>
        // datalist simulate select get value from fake input
        document.querySelector('input[list]').addEventListener('input', function(e) {
            var input = e.target,
                list = input.getAttribute('list'),
                options = document.querySelectorAll('#' + list + ' option'),
                hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
                inputValue = input.value;

            hiddenInput.value = inputValue;

            for (var i = 0; i < options.length; i++) {
                var option = options[i];

                if (option.innerText === inputValue) {
                    hiddenInput.value = option.getAttribute('data-value');
                    break;
                }
            }
        });
    </script>
@endsection
