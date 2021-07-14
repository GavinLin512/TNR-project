@extends('layouts.template')

@section('title' , 'TNR 首頁')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/01-homepage/index.css') }}">
@endsection


@section('main')

<main>
    <div class="banner" style="background-image: url({{ asset('img/front/01-homepage/banner.png') }})">
        <div class="container170">
            <span>每年有</span>
            <div class="mid">
                <div class="area-top">
                    <h1>1934</h1>
                    <h3>隻貓被撲殺</h3>
                </div>

                <div class="area-bot">
                    <h1>874</h1>
                    <h3>幼貓來不及長大</h3>
                </div>
            </div>
            <div class="bot">
                <h2>絕育</h2>
                <h1>0</h1>
                <h2>撲殺</h2>
            </div>
            <a>
                <a href="" class="banner-btn hvr-bounce-in">
                    <p>立即幫助</p>
                </a>
            </a>
        </div>
        <div class="grass-area">
            <div class="scroll-line">SCROLL</div>
            <img src="{{ asset('img/front/01-homepage/grass-1.png') }}" class="grass-1 ">
            <img src="{{ asset('img/front/01-homepage/grass-2.png') }}" class="grass-2">
        </div>
    </div>

    <div class="first-section">
        <div class="title-area">
            <div class="title-area">
                <div class="title-img">
                    <img src="{{ asset('img/front/deco-title.svg') }}">
                </div>
                <div class="title-text">
                    <h1>關於協會</h1>
                </div>
            </div>
        </div>

        <div class="container170">
            <div class="row">
                <div class="col col-lg-6 about-us-swiper-area" style="padding: 0%;">
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide about-img about-img-1" style="background-image: url({{ asset('img/front/01-homepage/cat-1.png') }})"></div>
                            <div class="swiper-slide about-img about-img-1" style="background-image: url({{ asset('img/front/01-homepage/cat-1.png') }})"></div>
                            <div class="swiper-slide about-img about-img-1" style="background-image: url({{ asset('img/front/01-homepage/cat-1.png') }})"></div>
                        </div>
                    </div>
                    <div class="about-swiper-pagination swiper-point"></div>
                    <img src="{{ asset('img/front/01-homepage/deco-line1.png') }}" class="deco-line1">
                    <div class="about-shadow"></div>
                </div>
                <div class="col col-lg-6" style="padding: 0%;">
                    <div class="about-us about-us-text-area">
                        <div class="top">
                            <div class="row">
                                <div class="col" style="padding: 0%;">
                                    <h1>理念</h1>
                                    <span>
                                        <br>
                                        貓是一種伴侶動物，應該為他的餘生負責和照顧，然而，有許多貓在戶外出生和死亡。每年貓屠宰數量為一年超過1,000多隻。
                                        <br>
                                        協會正與32名資深志工和各地湧入的愛心合作解決沒有主人貓的問題。
                                        <br>
                                        希望這能成為示範案例，蔓延到全台，不開心的貓數量將會減少。</span>
                                </div>
                            </div>
                        </div>
                        <div class="bot">
                            <div class="row">
                                <div class="col" style="padding: 0%;">
                                    <h1>什麼是TNR？</h1>
                                    <span>
                                        <br>
                                        Trap、Neuter、Return =捕捉/絕育/返回原位。
                                        <br>
                                        TNR是一個首字母縮寫詞，因為它不增加雜散貓的數量更多。這是努力進行絕育（雌性貓的避孕，雄性貓的閹割），然後將其放回原來的位置。
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p>感謝您一直以來的支持，這裡是年度業務和財務明細。</p>


                        <a href="" class="about-btn">
                            <p>查看明細</p>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="container140">
            <div class="row numerical">
                <div class="col-lg-4 col-md-12 d-flex justify-content-md-center pl-md-5 pl-lg-0  numerical-value"
                    style="padding: 0%;">
                    <div class="icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="text">
                        <h3>節育貓咪數</h3>
                        <h1 class="count" data-target="19940">19,940</h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex justify-content-md-center my-5 my-md-5 my-lg-0 numerical-value"
                    style="padding: 0%;">
                    <div class="icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="text">
                        <h3>醫療救助案</h3>
                        <h1 class="count" data-target="19940">8,893</h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex justify-content-md-center  numerical-value"
                    style="padding: 0%;">
                    <div class="icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="text">
                        <h3>助罐貓咪數</h3>
                        <h1 class="count" data-target="19940">2,943</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="second-section">
        <img src="{{ asset('img/front/01-homepage/grass-3.png') }}" class="grass-3">
        <div class="cat" style="background-image: url({{ asset('img/front/01-homepage/cat-2.png') }})">
            <div class="imgs">
                <img class="heart-1" src="{{asset('img/front/01-homepage/heart-1.svg')}}">
                <img class="heart-2" src="{{asset('img/front/01-homepage/heart-2.svg')}}">
                <div class="text-contain">
                    <div class="text-area">
                        <h3>養貓咪趣</h3>
                        <p>養貓最大的樂趣就是當「鏟屎官」的生活，幫牠把屎把尿體會當父母的感受。從害怕你、親近你到討抱抱，一點一滴的相處過程裡，更是能體驗照顧毛小孩如照顧孩子般，都是培養愛的責任感。</p>
                    </div>
                    <a href="" class="cat-btn">
                        <p>查看明細</p>
                    </a>
                </div>

            </div>
        </div>

        <div class="cat" style="background-image: url({{ asset('img/front/01-homepage/cat-3.png') }})">
            <div class="imgs">
                <div class="text-contain">
                    <div class="text-area">
                        <h3>救助計劃</h3>
                        <p>每個生命的誕生都不容易，因此我們重視每一條生命！因此我們從目標、內容到用途，都有完整計畫，以確實救助每個動物。經費的用途也很透明，讓每項捐款都能捐助人清楚知道愛心的歸處。</p>
                    </div>
                    <a href="" class="cat-btn">
                        <p>查看明細</p>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="third-section">
        <div class="title-area">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>最新消息</h1>
            </div>
        </div>

        <div class="container140">
            <div class="row news">
                <div class="col" style="padding: 0;">
                    <div class="news-area">
                        <div class="news-img">
                            <img class="img" src="{{URL:: asset('img/front/01-homepage/cat-4.png') }}">
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="news-text">
                            <h4>咖啡店與你攜手過中秋</h4>
                            <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                        </div>
                    </div>
                </div>

                <div class="col" style="padding: 0;">
                    <div class="news-area">
                        <div class="news-img">
                            <img class="img" src="{{URL:: asset('img/front/01-homepage/cat-5.png') }}">
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="news-text">
                            <h4>台北市貓咪協會聚會活動</h4>
                            <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding: 0;">
                    <div class="news-area">
                        <div class="news-img">
                            <img class="img" src="{{URL:: asset('img/front/01-homepage/cat-6.png') }}">
                            <div class="img-shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                        </div>
                        <div class="news-text">
                            <h4>台北市貓咪協會聚會活動</h4>
                            <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="news-btn">
                <p>查看更多</p>
            </a>
        </div>
    </div>

</main>

@endsection


@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
			pagination: {
				el: ".about-swiper-pagination",
			},
			autoplay: {
				delay: 5000,
			},

		});

		var num_swiper = new Swiper(".num-Swiper", {
			slidesPerView: 3,
			spaceBetween: 30,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});

    <!-- number counter -->

    <script>
        // const counters = document.querySelectorAll(".count");
		// const speed = 200;

		// counters.forEach((counter) => {
		// 	const updateCount = () => {
		// 		const target = +counter.getAttribute("data-target");
		// 		const count = +counter.innerText;
		// 		const increment = Math.trunc(target / speed);
		// 		// console.log(increment);

		// 		if (count < target) {
		// 			counter.innerText = parseInt(count + increment);
		// 			console.log(parseInt(count + increment));
		// 			setTimeout(updateCount, 7);
		// 		} else {
		// 			counter.innerText = target;
		// 		}
		// 	};
		// });
		// $(window).scroll(function () {
		// 	var height = $(window).scrollTop();
		// 	console.log(height);
		// 	if (height >= 1900) {
		// 		$(function () {
		// 		$('.count').each(function () {
		// 			$(this).prop('Counter', 0).animate({
		// 				Counter: $(this).text()
		// 			}, {
		// 				duration: 2000,
		// 				easing: 'swing',
		// 				step: function (now) {
		// 					$(this).text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
		// 				}
		// 			});
		// 		});

		// 	});
		// 	}
		// });

    </script>
    </script>
@endsection

