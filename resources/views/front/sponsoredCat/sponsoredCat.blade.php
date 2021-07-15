@extends('layouts.template')

@section('title' , 'TNR 助罐貓咪')

@section('css')

<link rel="stylesheet" href="{{ asset('css/02-sponsoredCat/sponsoredCat.css') }}">
@endsection

@section('main')

<main>
    <div class="first-section">
        <div class="title-area mt-200">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>領養之樂</h1>
            </div>
        </div>
        <div class="background">
            <img src="{{ asset('img/front/02-sponsoredCat/adopt-grass2.png') }}" alt="">
            <img src="{{ asset('img/front/02-sponsoredCat/adopt-grass1.png') }}" alt="">
            <img src="{{ asset('img/front/02-sponsoredCat/yellowCat.png') }}" alt="">
        </div>
        <div class="swiper-group">
            <div class="btns-area">
                <div class="dino-input-field select btns">
                    <span class="option-selected style-select-title1">
                        縣市<i class="fas fa-caret-down"></i>
                    </span>
                    <ul class="select-options style-select-option">
                        <li>台北縣</li>
                        <li>金門縣</li>
                    </ul>
                </div>
                <div class="dino-input-field select btns">
                    <span class="option-selected style-select-title1">
                        性別<i class="fas fa-caret-down"></i>
                    </span>
                    <ul class="select-options style-select-option">
                        <li>公</li>
                        <li>母</li>
                    </ul>
                </div>
                <div class="dino-input-field select btns">
                    <span class="option-selected style-select-title1">
                        年齡<i class="fas fa-caret-down"></i>
                    </span>
                    <ul class="select-options style-select-option">
                        <a href="">
                            <li>1個月</li>
                        </a>
                        <a href="">
                            <li>2個月</li>
                        </a>
                        <a href="">
                            <li>3個月</li>
                        </a>
                        <a href="">
                            <li>4個月</li>
                        </a>
                    </ul>
                </div>
                <div class="dino-input-field select btns">
                    <span class="option-selected style-select-title1">
                        預防針<i class="fas fa-caret-down"></i>
                    </span>
                    <ul class="select-options style-select-option">
                        <li>有</li>
                        <li>無</li>
                    </ul>
                </div>
            </div>
            <div class="swiper-container catSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-img">
                            <img class="img" src="{{ asset('img/front/02-sponsoredCat/cat-6.png') }}">
                            <div class="play"><i class="far fa-play-circle"></i></div>
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="card-major">
                            <div>編號</div>
                            <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                        </div>
                        <div class="card-text">
                            <span class="card-item">名字：</span><span class="card-item-vlaue">國王</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">縣市：</span><span class="card-item-vlaue">台中市</span>
                            <br>
                            <span class="card-item">性別：</span><span class="card-item-vlaue">公</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">年齡：</span><span class="card-item-vlaue">100天</span>
                            <br>
                            <span class="card-item">預防針：</span><span class="card-item-vlaue">有</span>
                        </div>
                        <a href="" class="btn">
                            我要領養
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-img">
                            <img class="img" src="{{ asset('img/front/02-sponsoredCat/cat-6.png') }}">
                            <div class="play"><i class="far fa-play-circle"></i></div>
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="card-major">
                            <div>編號</div>
                            <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                        </div>
                        <div class="card-text">
                            <span class="card-item">名字：</span><span class="card-item-vlaue">國王</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">縣市：</span><span class="card-item-vlaue">台中市</span>
                            <br>
                            <span class="card-item">性別：</span><span class="card-item-vlaue">公</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">年齡：</span><span class="card-item-vlaue">100天</span>
                            <br>
                            <span class="card-item">預防針：</span><span class="card-item-vlaue">有</span>
                        </div>
                        <a class="btn">我要領養</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-img">
                            <img class="img" src="{{ asset('img/front/02-sponsoredCat/cat-6.png') }}">
                            <div class="play"><i class="far fa-play-circle"></i></div>
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="card-major">
                            <div>編號</div>
                            <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                        </div>
                        <div class="card-text">
                            <span class="card-item">名字：</span><span class="card-item-vlaue">國王</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">縣市：</span><span class="card-item-vlaue">台中市</span>
                            <br>
                            <span class="card-item">性別：</span><span class="card-item-vlaue">公</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">年齡：</span><span class="card-item-vlaue">100天</span>
                            <br>
                            <span class="card-item">預防針：</span><span class="card-item-vlaue">有</span>
                        </div>
                        <a class="btn">我要領養</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-img">
                            <img class="img" src="{{ asset('img/front/02-sponsoredCat/cat-6.png') }}">
                            <div class="play"><i class="far fa-play-circle"></i></div>
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="card-major">
                            <div>編號</div>
                            <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                        </div>
                        <div class="card-text">
                            <span class="card-item">名字：</span><span class="card-item-vlaue">國王</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">縣市：</span><span class="card-item-vlaue">台中市</span>
                            <br>
                            <span class="card-item">性別：</span><span class="card-item-vlaue">公</span>
                            <span class="card-slash">/</span>
                            <span class="card-item">年齡：</span><span class="card-item-vlaue">100天</span>
                            <br>
                            <span class="card-item">預防針：</span><span class="card-item-vlaue">有</span>
                        </div>
                        <a class="btn">我要領養</a>
                    </div>
                    <div class="swiper-slide">Slide 5</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="adopt-img-area">
        <div class="adopt-img" style="background-image: url({{ asset('img/front/02-sponsoredCat/replace.png') }})"></div>
    </div>

    <div class="second-section">
        <div class="title-area">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>安養之樂</h1>
            </div>
        </div>

        <div class="text-area">
            <h3>
                不是每隻貓，都可以原地野放的 ，不是每隻貓，都可以順利的送養…
                <br>
                救的貓越多，就有越多放不回﹑也送不出去的貓！
                <br>
                這些貓，有的是身體上嚴重缺陷，有的需長期服藥﹑特別灌食…等
                <br>
                支持老病殘貓安養計劃， 來 <span>線上養一隻貓</span> 吧！
            </h3>
        </div>

        <div class="anyang-img-area">
            <div class="anyang-img" style="background-image: url({{ asset('img/front/02-sponsoredCat/girl.png') }})">
                <img class="paralysis-cat-1" src="{{ asset('img/front/02-sponsoredCat/paralysisCat-1.png') }}">

                <img class="paralysis-cat-2" src="{{ asset('img/front/02-sponsoredCat/paralysisCat-2.png') }}">
            </div>
        </div>

        <div class="swiper-father position-relative">

            <div class="swiper-container donateSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donate-card">
                            <div class="card-img">
                                <img class="donate-img" src="{{ asset('img/front/02-sponsoredCat/美貓4.jpg') }}">
                                <div class="card-shadow">
                                    <div class="play"><i class="far fa-play-circle"></i></div>
                                    <div class="shadow-text">
                                        缺 <span>1</span> 筆助養者
                                    </div>
                                </div>
                            </div>
                            <div class="donate-area">
                                <div class="donate-number">
                                    <p>編號</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <div class="donate-title">
                                    <h6>好乖(辦公室)</h6>
                                </div>
                                <div class="donate-text">
                                    <h6>本月助養者 : albe.Laura Lin</h6>
                                </div>
                                <div class="donate-btn">
                                    <a class="btn">我要助養</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next my-arrow1 swiper-button-white"></div>
            <div class="swiper-button-prev my-arrow1 swiper-button-white"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="third-section">
        <div class="title-area mt-200">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>貓貓日記</h1>
            </div>
        </div>
        <div class="container140 position-relative">
            <div class="swiper-group">
                <img src="{{ asset('img/front/02-sponsoredCat/pencil.png') }}" alt="" class="img">
                <div class="background">
                    <div class="shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                    <div class="background-text"></div>
                </div>
                <div class="swiper-container diarySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/front/02-sponsoredCat/cat-2.png') }}" alt="" class="img">
                        </div>
                        <div class="swiper-slide">
                            <div class="diary-text">
                                <div class="sub">
                                    <span class="sub-title">助養日記</span>
                                    <span class="date">2021.07.03(sat)</span>
                                </div>
                                <div class="title">一場生命的延續</div>
                                <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
                                    eius aut quibusdam dolorum error iure adipisci, molestiae nihil aperiam
                                    doloribus nesciunt voluptas harum accusantium totam explicabo at vel. Officia,
                                    expedita?</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/front/02-sponsoredCat/cat-2.png') }}" alt="" class="img">
                        </div>
                        <div class="swiper-slide">
                            <div class="diary-text">
                                <div class="sub">
                                    <span class="sub-title">助養日記</span>
                                    <span class="date">2021.07.03(sat)</span>
                                </div>
                                <div class="title">一場生命的延續</div>
                                <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
                                    eius aut quibusdam dolorum error iure adipisci, molestiae nihil aperiam
                                    doloribus nesciunt voluptas harum accusantium totam explicabo at vel. Officia,
                                    expedita?</div>
                            </div>
                        </div>
                        {{-- <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div> --}}
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-white my-arrow2 arrow2-next"></div>
                <div class="swiper-button-prev swiper-button-white my-arrow2 arrow2-prev"></div>
            </div>
        </div>
    </div>


</main>

@endsection

@section('js')

    <script>
        var my_swiper = new Swiper(".catSwiper", {
            slidesPerView: 3,
            spaceBetween: 60,
            // slidesPerGroup: 3,
            width: 1400,
            pagination: {
                el: ".catSwiper .swiper-pagination",
                clickable: true,
            },
        });

        var donate_swiper = new Swiper(".donateSwiper", {
            slidesPerView: 1,
            slidesPerColumn: 2,
            pagination: {
                el: ".donateSwiper .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-father .swiper-button-next",
                prevEl: ".swiper-father .swiper-button-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 2,
                    slidesPerColumn: 2,

                }

            }
        });

        var diary_swiper = new Swiper(".diarySwiper", {
            slidesPerView: 2,
            slidesPerGroup: 2,

            slidesPerView: 'auto',
            pagination: {
                el: ".diarySwiper .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-group .swiper-button-next",
                prevEl: ".swiper-group .swiper-button-prev",
            },
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function (e) {
            $('.btns').click(function (e) {
                e.stopPropagation();
                $('.select-options', this).slideToggle();
            });

            $('.select-options li').click(function (e) {
                e.stopPropagation();
                const text_inside = $(this).text();
                $(this).parent().slideUp();
                $(this).parent().prev().text(text_inside);
            });

            $(document).click(function (e) {
                $('.select-options').slideUp();
            });
        });
    </script>


@endsection

