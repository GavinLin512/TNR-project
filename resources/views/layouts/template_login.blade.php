<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/00-temlate/temlate.css') }}">
    @yield('css')
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/odometer-theme-default.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div id="nav" class="nav">
            <div class="logo" style="background-image: url({{ asset('img/front/logo.png') }})"></div>
            <div class="menu">
                <div class="burger active"></div>
                <div class="burger-area" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                    <span class="off"><i class="fas fa-times "></i></span>
                    <div class="list">
                        <a style="margin-top: 140px;" href="{{ asset('/TNR-index') }}">首頁</a>
                        {{-- <a>最新消息</a> --}}
                        <a href="{{ asset('/TNR-index/sponsored_cat') }}">養貓咪趣</a>
                        <a href="{{ asset('/TNR-index/assistant') }}">救助計畫</a>
                        <a>貓貓店鋪</a>
                        <a class="nav-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{-- <p>會員登入</p> --}}
                            <p>會員登出</p>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')

    <footer>
        <div class="footer-area">
            <div class="footer-img"
                style="margin: 0; padding: 0;background-image: url({{ asset('img/front/footer/footer-wave.png') }})">
            </div>
            <div class="container140">
                <div class="ft-top">
                    <div class="ft-left">

                        <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=cashier@tnrtw.org"
                            target="_blank">
                            <div class="text-1">
                                <i class="fas fa-envelope" style="margin-right: 10px;"></i>
                                <p>TNR節育、醫療、助罐、對帳、收據、小額捐、贊助或是合作提案</p>
                            </div>
                        </a>

                        <a href="https://goo.gl/maps/VT5Dz9KUZ7e8nrEq7" target="_blank">
                            <div class="text-2">
                                <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>
                                <p>105台北市松山區八德路三段74巷13弄8號1樓</p>
                            </div>
                        </a>
                        <div class="text-3">
                            <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=cashier@tnrtw.org"
                                target="_blank">訂閱電子報</a>
                            <div class="contact">
                                <input class="ft-input" type="text" placeholder="請輸入 e-mail 帳號">

                                <button class="contact-btn">
                                    <i class="fas fa-paper-plane" style="color:#ff7950;"></i>
                                </button>



                            </div>

                            <a href="https://www.facebook.com/SupportTNR/" target="_blank">
                                <div class="fb-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#nav">
                        <div class="ft-mouse" style="background-image: url({{asset('img/front/footer/mouse.png')}})">
                            <span>Top</span>
                        </div>
                    </a>
                </div>
                <div class="ft-bot">
                    <p>勸募核准文號：衛部救字第1091364516號</p>
                    <p>©2011-2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        let menu = document.querySelector('.menu')
		let burger = document.querySelector('.burger')
		let burger_area = document.querySelector('.burger-area')
		let off = document.querySelector('.off')

		menu.addEventListener('click', function () {
			// console.log(123);
			burger.classList.remove('active');
			burger_area.classList.add('active');
		});

		off.addEventListener('click', function () {
			burger.classList.add('active');
			burger_area.classList.remove('active');
			// 停止事件，否則會一起觸發上面的事件
			event.stopPropagation()
		})

		// let burger = document.querySelector('.burger')
		// let burger_area = document.querySelector('.burger-area')
		// let off = document.querySelectorAll('.off')
		// off.forEach(e =>{
		// 	e.addEventListener('click', function () {
		// 		console.log(e);
		// 		burger.classList.toggle('active');
		// 		burger_area.classList.toggle('active');
		// 		event.stopPropagation()
		// 	})
		// })

    </script>

    @yield('js')
</body>

</html>
