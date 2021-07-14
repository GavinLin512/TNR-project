@extends('layouts.template')

@section('title' , 'TNR 救助貓咪')

@section('css')
<link rel="stylesheet" href="{{ asset('css/03-assistant/assistant.css') }}">
@endsection


@section('main')

<main>
    <div class="first-section max-w">
        <div class="background position-relative">
            <div class="img position-relative" style="background-image: url({{ asset('img/front/03-assistant/blue-wave.png') }})">
                <span class="background-title">捐罐計畫</span>
            </div>
            <div class="links">
                <a href="">
                    <div class="link active"><i class="fas fa-utensil-fork"></i></div>
                </a>
                <a href="">
                    <div class="link"><i class="fas fa-heartbeat"></i></div>
                </a>
                <a href="">
                    <div class="link"><i class="fas fa-stethoscope"></i></div>
                </a>
            </div>
        </div>

        <div class="swiper-container helpSwiper">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})" s>
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="donate-can-card">
                        <div class="donate-can-img" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                            <img src="{{ asset('img/front/03-assistant/feedCAt-1.png') }}">
                            <div class="card-shadow">
                                <div class="shadow-text">
                                    缺 <span>1</span> 筆助養者
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            <div class="text-area">
                                <div class="donate-number">
                                    <p>編號3260</p>
                                    <div class="fb-icon"><i class="fab fa-facebook-f"></i></div>
                                </div>
                                <h6 style="font-weight: bold;">老舊眷村與山區貓咪</h6>
                                <h6>每名額捐款金額: 500元</h6>
                                <h6>需求人數: 20名</h6>
                                <div class="donate-btn">
                                    <a class="btn">
                                        <p>我要捐罐</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="second-section">
        <div class="title-area">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>申請流程</h1>
            </div>
        </div>

        <div class="background position-relative">
            <img src="{{ asset('img/front/03-assistant/catchCAt.png') }}">
            <img src="{{ asset('img/front/03-assistant/sleepingCAt.png') }}">
            <div class="line"></div>
        </div>

        <div class="swiper-container applySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/front/RWD-576/helpCAT-576.png') }}" alt="">
                    <div class="text-area">
                        <h3><span>1.</span>抓貓申請流程</h3>
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。
                            滾滾長江東逝水，浪花淘盡英雄。是非成敗轉頭空，青山依舊在，幾度夕陽紅。白髮漁樵江渚上，慣看秋月春風。一壺濁酒喜相逢，古今多少事，都付笑談中。
                            青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/front/RWD-576/helpCAT-576.png') }}" alt="">

                    <div class="text-area">
                        <h3><span>2.</span>自行申請罐頭餵貓</h3>
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。
                            滾滾長江東逝水，浪花淘盡英雄。是非成敗轉頭空，青山依舊在，幾度夕陽紅。白髮漁樵江渚上，慣看秋月春風。一壺濁酒喜相逢，古今多少事，都付笑談中。
                            青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。</p>

                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/front/RWD-576/helpCAT-576.png') }}" alt="">

                    <div class="text-area">
                        <h3><span>3.</span>申請醫通報助流程</h3>
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。
                            滾滾長江東逝水，浪花淘盡英雄。是非成敗轉頭空，青山依舊在，幾度夕陽紅。白髮漁樵江渚上，慣看秋月春風。一壺濁酒喜相逢，古今多少事，都付笑談中。
                            青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。</p>

                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/front/RWD-576/helpCAT-576.png') }}" alt="">

                    <div class="text-area">
                        <h3><span>4.</span>申請成為醫療醫院</h3>
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。
                            滾滾長江東逝水，浪花淘盡英雄。是非成敗轉頭空，青山依舊在，幾度夕陽紅。白髮漁樵江渚上，慣看秋月春風。一壺濁酒喜相逢，古今多少事，都付笑談中。
                            青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。</p>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="third-section roll" style="background-image: url({{ asset('img/front/03-assistant/loveCat.png') }})">
        <div class="thank-card">
            <div class="heart-img">
                <img src="{{ asset('img/front/03-assistant/Heart.png') }}" class="img">
            </div>
            <div class="text-area">
                <h5>謝謝你們的愛心，有你們真好</h5>
                <div class="thank-btn">
                    <a class="btn">愛心名冊</a>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-section">
        <div class="title-area mt-200">
            <div class="title-img">
                <img src="{{ asset('img/front/deco-title.svg') }}">
            </div>
            <div class="title-text">
                <h1>貓貓日記</h1>
            </div>
        </div>
        <div class="shadow" style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
        <div class="container140 position-relative">
            <div class="swiper-group">
                <div class="swiper-container diarySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="diary-text">
                                <div class="sub">
                                    <span class="sub-title">助養日記</span>
                                    <span class="date">2021.07.03(sat)</span>
                                </div>
                                <div class="title">一場生命的延續</div>
                                <div class="text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
                                    eius aut quibusdam dolorum error iure adipisci, molestiae nihil aperiam
                                    doloribus nesciunt voluptas harum accusantium totam explicabo at vel.
                                    Officia,
                                    expedita?Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Voluptates
                                    numquam eaque velit perspiciatis nesciunt corrupti nostrum dolores deleniti
                                    repellat. Autem, saepe placeat at ad laudantium commodi non mollitia
                                    praesentium
                                    sequi!
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/front/01-homepage/cat-2.png') }}" class="img">
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
                            <img src="{{ asset('img/front/01-homepage/cat-2.png') }}" alt="" class="img">
                        </div>
                        {{-- <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div> --}}
                    </div>
                </div>
                <div class="swiper-button-next my-arrow2 arrow2-next swiper-button-white"></div>
                <div class="swiper-button-prev my-arrow2 arrow2-prev swiper-button-white"></div>
            </div>
        </div>
        <div class="background position-relative">
            <img src="{{ asset('img/front/03-assistant/pencilCAT.png') }}" alt="">
            <img src="{{ asset('img/front/03-assistant/red-grass1.png') }}" alt="">
        </div>
    </div>
</main>

@endsection


@section('js')

<!-- swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".helpSwiper", {
			width: 1920,
			slidesPerView: 2,
			spaceBetween: 20,
			initialSlide: 1,
			centeredSlides: true,
			pagination: {
				el: ".helpSwiper .swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				// when window width is >= 320px
				577: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
			},
			breakpoints: {
				// when window width is >= 320px
				1600: {

					slidesPerView: 4,
					spaceBetween: 60,
				},
			},
		});

		var swiper = new Swiper(".applySwiper", {
			spaceBetween: 800,
			pagination: {
				el: ".applySwiper .swiper-pagination",
				clickable: true,
				bulletClass: 'my-bullet',
				bulletActiveClass: 'my-bullet-active',
				renderBullet: function (index, className) {
					switch (index) {
						case 0: text = '抓貓申請流程'; break;
						case 1: text = '自行申請罐頭餵貓'; break;
						case 2: text = '申請醫通報助流程'; break;
						case 3: text = '申請成為醫療醫院'; break;
					}
					return '<span class="' + className + '">' + text + '</span>';
				},
			},
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

@endsection

