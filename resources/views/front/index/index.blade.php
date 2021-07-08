<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/homepage/index.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ≡ -->
    <nav>
        <div id="nav" class="nav">
            <div class="logo" style="background-image: url({{ asset('img/front/logo.png') }})"></div>
            <div class="menu">
                <div class="burger"></div>
            </div>
        </div>
    </nav>

    <main>
        <div class="banner" style="background-image: url({{ asset('img/front/01-homepage/banner.png') }})">
            <div class="container170">
                <span>每年有</span>
                <div class="mid">
                    <div class="area-top">
                        <h1>1934</h1>
                        <h3>隻貓被屠殺</h3>
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
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="banner-btn hvr-bounce-in">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <p>立即幫助</p>
                    </a>
                </a>
            </div>
            <div class="grass-area">
                <div class="scroll-line">SCROLL</div>
                <img src="{{ asset('img/front/01-homepage/grass-1.png') }}" alt="" class="grass-1 ">
                <img src="{{ asset('img/front/01-homepage/grass-2.png') }}" alt="" class="grass-2">
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
                    <div class="col-6 col about-us-swiper-area" style="padding: 0%;">
                        <div class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide about-img about-img-1"
                                    style="background-image: url({{ asset('img/front/01-homepage/cat-1.png') }})">
                                </div>
                                <div class="swiper-slide about-img about-img-1"
                                    style="background-image: url({{ asset('img/front/01-homepage/cat-2.png') }})">
                                </div>
                                <div class="swiper-slide about-img about-img-1"
                                    style="background-image: url({{ asset('img/front/01-homepage/cat-3.png') }})">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-point"></div>
                        <img src="{{ asset('img/front/01-homepage/deco-line1.png') }}" class="deco-line1">
                        <div class="about-shadow"
                            style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})"></div>
                    </div>
                    <div class="col-6 col" style="padding: 0%;">
                        <div class="about-us about-us-text-area">
                            <div class="top">
                                <div class="row">
                                    <div class="col" style="padding: 0%;">
                                        <h1>理念</h1>
                                        <span>貓是一種伴侶動物，應該為他的餘生負責和照顧，然而，有許多貓在戶外出生和死亡。每年貓屠宰數量為一年超過1,000多隻。
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
                                        <span>Trap、Neuter、Return =捕捉/絕育/返回原位。
                                            <br>
                                            TNR是一個首字母縮寫詞，因為它不增加雜散貓的數量更多。這是努力進行絕育（雌性貓的避孕，雄性貓的閹割），然後將其放回原來的位置。
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <p>感謝您一直以來的支持，這裡是年度業務和財務明細。</p>
                            <div class="about-btn">
                                <p>查看明細</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container140">
                <div class="row">
                    <div class="col-4 numerical-value" style="padding: 0%;">
                        <div class="icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="text">
                            <h3>節育貓咪數</h3>
                            <h1 class="count" data-target="19940">19,940</h1>
                        </div>
                    </div>
                    <div class="col-4 numerical-value" style="padding: 0%;">
                        <div class="icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="text">
                            <h3>節育貓咪數</h3>
                            <h1 class="count" data-target="1940">1,940</h1>
                        </div>
                    </div>
                    <div class="col-4 numerical-value" style="padding: 0%;">
                        <div class="icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="text">
                            <h3>節育貓咪數</h3>
                            <h1 class="count" data-target="3000">3,000</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-section">
            <img src="{{ asset('img/front/01-homepage/grass-3.png') }}" class="grass-3">
            <div class="feed-cat">
                <div class="feed-img" style="background-image: url({{ asset('img/front/01-homepage/cat-2.png') }})">
                    <img class="heart-1" src="{{ asset('img/front/01-homepage/heart-1.svg') }}">
                    <img class="heart-2" src="{{ asset('img/front/01-homepage/heart-2.svg') }}">
                </div>
                <div class="feed-area">
                    <div class="text-area">
                        <h3>養貓咪趣</h3>
                        <p>養貓最大的樂趣就是當「鏟屎官」的生活，幫牠把屎把尿體會當父母的感受。從害怕你、親近你到討抱抱，一點一滴的相處過程裡，更是能體驗照顧毛小孩如照顧孩子般，都是培養愛的責任感。</p>
                    </div>
                    <div class="feed-btn">
                        <p>查看明細</p>
                    </div>
                </div>
            </div>

            <div class="help-cat">
                <div class="help-img" style="background-image: url({{ asset('img/front/01-homepage/cat-3.png') }})">
                    <img class="sos-left" src="{{ asset('img/front/01-homepage/sos-left.svg') }}">
                    <img class="sos-right" src="{{ asset('img/front/01-homepage/sos-right.svg') }}">

                </div>
                <div class="help-area">
                    <div class="text-area">
                        <h3>救助計劃</h3>
                        <p>每個生命的誕生都不容易，因此我們重視每一條生命！因此我們從目標、內容到用途，都有完整計畫，以確實救助每個動物。經費的用途也很透明，讓每項捐款都能捐助人清楚知道愛心的歸處。</p>
                    </div>
                    <div class="help-btn">
                        <p>查看明細</p>
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
                <div class="row">
                    <div class="col" style="padding: 0;">
                        <div class="news-area">
                            <div class="news-img">
                                <img class="img" src="{{ asset('img/front/01-homepage/cat-4.png') }}">
                                <div class="img-shadow"
                                    style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                                </div>
                            </div>
                            <div class="news-text">
                                <h4>什麼是TNR？</h4>
                                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="padding: 0;">
                        <div class="news-area">
                            <div class="news-img">
                                <img class="img" src="{{ asset('img/front/01-homepage/cat-5.png') }}">
                                <div class="img-shadow"
                                    style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                                </div>
                            </div>
                            <div class="news-text">
                                <h4>什麼是TNR？</h4>
                                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="padding: 0;">
                        <div class="news-area">
                            <div class="news-img">
                                <img class="img" src="{{ asset('img/front/01-homepage/cat-6.png') }}">
                                <div class="img-shadow"
                                    style="background-image: url({{ asset('img/front/01-homepage/米色背景.jpg') }})">
                                </div>
                            </div>
                            <div class="news-text">
                                <h4>什麼是TNR？</h4>
                                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今多少事，都付笑談中。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-btn">
                    <p>查看更多</p>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="footer-area">
            <div class="footer-img"
                style="margin: 0; padding: 0; background-image: url({{ asset('img/front/footer/footer-wave.png') }})">
            </div>
            <div class="container140">
                <div class="ft-top">
                    <div class="ft-left">

                        <!-- https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=cashier@tnrtw.org -->

                        <!-- mailto:cashier@tnrtw.org -->

                        <a href="mailto:cashier@tnrtw.org" target="_blank">
                            <div class="text-1">
                                <i class="fas fa-envelope" style="margin-right: 10px;"></i>
                                <p>TNR節育、醫療、助罐、對帳、收據、小額捐、贊助或是合作提案</p>
                            </div>
                        </a>


                        <a href="{{ asset('https://goo.gl/maps/VT5Dz9KUZ7e8nrEq7') }}" target="_blank">
                            <div class="text-2">
                                <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>
                                <p>105台北市松山區八德路三段74巷13弄8號1樓</p>
                            </div>
                        </a>
                        <div class="text-3">
                            <p>訂閱電子報</p>
                            <div class="contact">
                                <input class="ft-input" type="text" placeholder="請輸入 e-mail 帳號">
                                <button class="contact-btn">
                                    <i class="fas fa-paper-plane" style="color:#ff7950;"></i>
                                </button>
                            </div>
                            <a href="{{ asset('https://www.facebook.com/SupportTNR/') }}" target="_blank">
                                <div class="fb-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#nav">
                        <div class="ft-mouse"
                            style="background-image: url({{ asset('img/front/footer/mouse.png') }})">
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
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
    <!-- number counter -->

    <script>

    </script>
</body>

</html>