<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth theme-one"
                style="background-image: url({{ asset('img/auth/login_3_1.jpg') }});">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <h2 class="text-center text-avatar text-google mb-4">會員註冊</h2>
                        <div class="auto-form-wrapper">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                {{-- name --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="name"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('姓名') }}</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="請填入使用者姓名">

                                        @error('name')
                                            <span class="invalid-feedback ml-5 pl-5" role="alert">
                                                <strong class="ml-5">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- nick_name --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="nick-name"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('暱稱') }}</label>
                                        <input id="nick-name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="nick-name"
                                            value="{{ old('nick-name') }}" required autocomplete="nick-name"
                                            autofocus placeholder="請填入使用者姓名">

                                        @error('name')
                                            <span class="invalid-feedback ml-5 pl-5" role="alert">
                                                <strong class="ml-5">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="email"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('Email 地址') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="請填入常用電子信箱">

                                        @error('email')
                                            <span class="invalid-feedback ml-5 pl-5 " role="alert">
                                                <strong class="ml-5">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- password --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="password"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('密碼') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="請填入密碼">
                                        @error('password')
                                            <span class="invalid-feedback ml-5 pl-5" role="alert">
                                                <strong class="ml-5">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- password confirm --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="password-confirm"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('再次確認密碼') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="請再次填入密碼">
                                    </div>
                                </div>

                                {{-- phone --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="phone"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('電話') }}</label>
                                        <input id="phone" type="phone" class="form-control" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone"
                                            placeholder="請填入常用聯絡電話">
                                    </div>
                                </div>

                                {{-- address --}}
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <label for="address"
                                            class="col-3 col-form-label text-md-right mt-1">{{ __('地址') }}</label>
                                        <input id="address" type="address" class="form-control" name="address"
                                            value="{{ old('address') }}" required autocomplete="address"
                                            placeholder="請填入通訊地址">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-github submit-btn btn-block">註冊</button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-google font-weight-semibold">已經有帳號了嗎？</span>
                                    <a href="{{ asset('/TNR-index/login') }}" class="text-black">登入</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../assets/js/shared/off-canvas.js"></script>
    <script src="../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
