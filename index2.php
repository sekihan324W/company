<?php
  global $uri;
  global $dir;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="SHORTCUT ICON" href="./favicon.ico" />
  <link rel="stylesheet" href="css/style.css">
  <title>○△建設株式会社</title>

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>
  <script src="js/jquery.mobile.customized.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/camera.min.js"></script> 
    <script>
    jQuery(function(){			
        jQuery('#camera').camera({
        height: '50%',
        });
    });
    </script>
</head>

<body>
  <div class="page">

  <header>

    <section>
    <div class="stuck_container">
    <div class="container">
        <!-- ハンバーガーボタン -->
    <section>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="globalMenuSp">
        <ul>
            <li><a href="#">ホーム</a></li>
            <li><a href="#">○○○について</a></li>
            <li><a href="#">施工事例</a></li>
            <li><a href="#">求人情報</a></li>
            <li><a href="#">お問い合わせ</a></li>
        </ul>
    </nav>
    </section>
    <script>
        $(function() {
            $('.hamburger').click(function() {
                $(this).toggleClass('active');
        
                if ($(this).hasClass('active')) {
                    $('.globalMenuSp').addClass('active');
                } else {
                    $('.globalMenuSp').removeClass('active');
                }
            });
        });
    </script>    <!-- END ハンバーガーボタン -->

    <ul class="inline-list">
        <li><a href="#" class="icon icon-xs icon-secondary fa-map-marker"></a></li>
        <li><a href="/cdn-cgi/l/email-protection#2a09"
                class="icon icon-xs icon-secondary fa fa-envelope"></a></li>
        <li><a href="callto:#" class="icon icon-xs icon-secondary fa fa-phone"></a></li>
    </ul>
    </div><!-- /container -->
    </div><!-- /stuck_container -->
    </section>

    <section class="bg-secondary-2 ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-sm-center text-md-left">
                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">株式会社<br> ○○○○○○</a>
                    </h1>
                </div>
            </div>
            <div class="col-md-6 inset-2 text-center text-md-right">

                <!-- Search Form -->
                <form class="search-form offset-2" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off"
                            placeholder="Search.." />
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>

                <ul class="inline-list-2 offset-4">
                    <li><a href="#" class="icon icon-sm icon-primary fa fa-tumblr-square"></a></li>
                    <li><a href="#" class="icon icon-sm icon-primary fa fa-twitter-square"></a></li>
                    <li><a href="#" class="icon icon-sm icon-primary fa fa-youtube"></a></li>
                    <li><a href="#" class="icon icon-sm icon-primary fa fa-rss"></a></li>
                </ul>
            </div>
        </div>

    </div>
  </section>
  </header>

  <!--========================================================
                              CONTENT
  =========================================================-->
    <main>
            <!-- SECTION -->
            <section class="well-8">

                <!-- Camera  -->
                <div class="camera_container">
                    <div id="camera" class="camera_wrap slide_height">
                        <div data-src="images/slide_01.jpg">
                            <div class="camera_caption fadeIn">
                                <p class="big">安全で安心できる街づくり </p>
                            </div>
                        </div>
                        <div data-src="images/slide_02.jpg">
                            <div class="camera_caption fadeIn">
                                <p class="big"> Make Your <br>
                                    <span>Home warmer and healthier</span></p>
                            </div>
                        </div>
                        <div data-src="images/slide_03.jpg">
                            <div class="camera_caption fadeIn">
                                <p class="big"> Reduce <br>
                                    <span>Your energy use</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Camera -->
            </section>

            <!--  END SECTION  -->


            <!-- Section -->
            <section class="well midashimargin">
                <div class="container">
                    <h2>地域の皆様が安心できる施工</h2>

                    <div class="row">

                        <div class="col-md-12">
                            <p class="big-2 text-secondary-1 bold uppercase offset-5">
                                愛知県瀬戸市の株式会社◯◯は外溝工事・造成工事・舗装工事・ドローン撮影を行っている会社です。
                                これまでの経験を活かし最良のご提案をすることで、多くのお客様に満足の声をいただいております。
                                お仕事のご依頼・ご相談お待ちしております！！

                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="row text-center offset-6">
                        <a href="#" class="btn icon-md primary-color fa-arrow-circle-o-right"></a>
                    </div>
                </div>
            </section>

            <!-- END Section -->


            <!-- Section -->
            <section class="well-6 bg-secondary-2">

                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center text-lg-right">
                        <img src="images/page-01_img01.jpg" alt="" />
                    </div>

                    <div class="col-lg-6 col-md-12 inset-3 text-center text-lg-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6" style="position: relative;">
                                    <img src="images/staff_bg02.png" style="position: absolute;top: -86px;">
                                    <h2 class="text-center text-lg-left">○○はどんな会社?</h2>
                                    <h6 class="small normal text-center text-lg-left text-primary">
                                        仲間と未来をつなぐひとりひとりの○○○スピリット</h6>

                                    <p class="big-1 offset-3 font-family-2 text-secondary-2">
                                        ○○○は創業50年の歴史をもつ、愛知県での港湾土木を中心とした建設会社です。「あなたと海をつなぐ。」をスローガンとし、日々、人々の暮らしの基盤づくりに貢献しております。
                                    </p>
                                    <a href="#" class="btn btn-md btn-secondary-1 offset-3">もっと読む</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- END Section -->

            <!-- Section -->
            <section class="well-3 text-center">
                <div class="container">
                    <h3>事業内容<br><span style="
                    font-size: 25px;
                    color: #48c0db;
                ">Service</span></h3>

                    <div class="row flow-offset-3">

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="box-skin">
                                <img src="images/page-01_img02.jpg" class="round" alt="" />
                                <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
                                <h5 class="text-secondary-3">外構工事</h5>

                                <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
                                    2018年(平成30年)8月〜2018年(平成30年)12月</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="box-skin">
                                <img src="images/page-01_img03.jpg" class="round" alt="" />
                                <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
                                <h5 class="text-secondary-3">造成工事</h5>

                                <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
                                    2018年(平成30年)8月〜2018年(平成30年)12月</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="box-skin">

                                <img src="images/page-01_img04.jpg" class="round" alt="" />
                                <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
                                <h5 class="text-secondary-3">舗装工事</h5>

                                <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
                                    2018年(平成30年)8月〜2018年(平成30年)12月</p>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="box-skin">

                                <img src="images/page-01_img05.jpg" class="round" alt="" />
                                <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
                                <h5 class="text-secondary-3">ドローン撮影</h5>

                                <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
                                    2018年(平成30年)8月〜2018年(平成30年)12月</p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--  END Section  -->

<!--  Section  -->
<section class="well-4 bg-secondary-3 bg-fixed-1 bg-image bg-image-1">
                <div class="container">
                    <h3>施工実績 <br><span style="
                        font-size: 25px;
                        color: #48c0db;
                        text-shadow: 0 0 17px #fbfbfb;
                        ">Works</span></h3>

                    <div class="row flow-offset-2">
                        <section id="works">
                            <div class="l_section_inner">

                                <div class="section_body">
                                    <div class="swiper-container works_container swiper-container-horizontal"
                                        style="cursor: grab;">
                                        <div class="swiper-wrapper works_list">

                                            <div class="swiper-slide works_item lazyload sort01 swiper-slide-duplicate"
                                                data-swiper-slide-index="0" >
                                                <a href="#">
                                                    <div style="background-image: url(images/page-01_img05.jpg);"
                                                        class="works_image">
                                                    </div>
                                                        <div class="works_title">バイパス災害復旧工事</div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide works_item lazyload sort01 swiper-slide-duplicate"
                                                data-swiper-slide-index="1" >
                                                <a href="#">
                                                    <div style="background-image: url(images/page-01_img05.jpg);"
                                                        class="works_image"></div>
                                                    <div class="works_title">バイパス災害復旧工事</div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide works_item lazyload sort01 swiper-slide-duplicate"
                                                data-swiper-slide-index="2" >
                                                <a href="#">
                                                    <div style="background-image: url(images/page-01_img05.jpg);"
                                                        class="works_image"></div>
                                                    <div class="works_title">バイパス災害復旧工事</div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide works_item lazyload sort01 swiper-slide-duplicate"
                                                data-swiper-slide-index="3" >
                                                <a href="#">
                                                    <div style="background-image: url(images/page-01_img05.jpg);"
                                                        class="works_image"></div>
                                                    <div class="works_title">バイパス災害復旧工事</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="    "></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <a href="#" class="btn btn-sm btn-secondary-1">もっと見る</a>
                </div>
            </section>
            <!--  END Section  -->

            <!--  Section  -->
            <section class="bg-image bg-image-saiyo">
                <div class="container">

                <h3 class="bold" style="color: #fff;">採用情報 <br>   
                        <span style="
                        font-size: 25px;
                        color: #48c0db;
                        ">Recruit</span></h3>

                <div class="text-center">
                <p class="big-1 offset-3 font-family-2 text-secondary-2 " style="color: #FFF;">
                弊社では、一緒に働いてくれる仲間を募集中！<br>
                新しいことにチャレンジして、皆さんでより良い環境を一緒に作りませんか？
                </p>

                <a href="#" class="btn btn-md btn-secondary-1 offset-3">募集業務の詳細</a>
                </div>

                

                            
                            
                            <!-- Contact Form -->
                    <!-- <div class="contact-form offset-7">
                        <form class="mailform" method="post" action="bat/rd-mailform.php">
                            <input type="hidden" name="form-type" value="subscribe" />
                            <fieldset>
                                <label class="name" data-add-placeholder>
                                    <input type="text" name="name" placeholder="First Name"
                                        data-constraints="@LettersOnly @NotEmpty" />
                                </label>

                                <label class="name" data-add-placeholder>
                                    <input type="text" name="name" placeholder="Last Name"
                                        data-constraints="@LettersOnly @NotEmpty" />
                                </label>

                                <label data-add-placeholder>
                                    <textarea name="message" placeholder="Message"
                                        data-constraints="@NotEmpty"></textarea>

                                </label>

                                <div class="mfControls">
                                    <button class="btn btn-xl btn-secondary-1" type="submit">Send Your Messages</button>
                                </div>
                            </fieldset>
                        </form>
                    </div> -->
                    <!-- End Contact Form -->
                </div>
            </section>
            <!--  END Section  -->

            <!-- Section -->
            <section class="well-4 bg-secondary-3">
                    <div class="container">
        
                        <div class="row flow-offset-2">
                            <div class="col-md-6 text-center text-md-left">
                                <h4 class="text-center text-md-left offset-1">お問い合わせ<br>
                                    <span style="
                                    font-size: 25px;
                                    color: #48c0db;
                                    text-shadow: 0 0 17px #fbfbfb;
                                    ">Contact</span></h4>
        
                                        <p style="
                                    width: 430px;
                                    line-height: 3em;
                                    margin-bottom: 100px;
                                ">土木工事・舗装工事・水道管設置工事・ドローン測量のことに関する
                                                                        ご依頼・お問い合わ募集中！！
                                                                        
                                </p>
                                <hr>
                                <a href="#" class="btn btn-sm btn-secondary-1">メールでのお問い合わせはこちら</a>
                            </div>

                            <div class="col-md-6 text-center text-md-left">
                                <h4 class="text-primary text-center text-md-left offset-1">Twitter更新</h4>
        
                                <p><img src="images/twitter-koshin.png" alt="" style="
                                    width: 353px;
                                "></p>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- END Section -->

      <!--  Section -->
      <section class="well-5 bg-primary">
                <div class="container">
                    <!-- Flex List -->
                    <ul class="flex-list flow-offset-3">
                        <li><a href="#" class="link">ホーム</a></li>
                        <li><a href="#" class="link">○○○について</a></li>
                        <li><a href="#" class="link">施工事例</a></li>
                        <li><a href="#" class="link">採用情報</a></li>
                        <li><a href="#" class="link">お問い合わせ</a></li>
                    </ul>
                    <!-- Flex List END -->
                </div>
            </section>
            <!--  END Section  -->
        </main>







<!-- Footer -->
<footer class="bg-image bg-image-2 text-center">
    <div class="container">
    <ul class="inline-list-4">
                    <li><a href="#" class="icon icon-lg icon-primary fa fa-tumblr-square"></a></li>
                    <li><a href="#" class="icon icon-lg icon-primary fa fa-twitter-square"></a></li>
                    <li><a href="#" class="icon icon-lg icon-primary fa fa-facebook-square"></a></li>
                </ul>
                <address class="contact-info uppercase bold">
                   <h5>株式会社○○○</h5>
                   <dl>
                        <dt>TEL:&nbsp;</dt>
                        <dd><a href="/cdn-cgi/l/email-protection#4261"><span class="__cf_email__"
                                    data-cfemail="7e1d11100a1f1d0a3e1a1b13111217101550110c19">0000-00-0000</span></a>
                        </dd>

                        <dt>FAX:&nbsp;</dt>
                        <dd><a href="/cdn-cgi/l/email-protection#4261"><span class="__cf_email__"
                                    data-cfemail="7e1d11100a1f1d0a3e1a1b13111217101550110c19">0000-00-0000</span></a>
                        </dd>

                        <dt>E-MAIL:&nbsp;</dt>
                        <dd><a href="/cdn-cgi/l/email-protection#4261"><span class="__cf_email__"
                                    data-cfemail="7e1d11100a1f1d0a3e1a1b13111217101550110c19">xxxxx@xxx.co.jp</span></a>
                        </dd>
                    </dl>
                </address>

                <p class="privacy-policy">株式会社○○○
                    <span>© &#160;</span><span id="copyright-year"></span>&#160;<a href="index-5.html"
                        class="big-1 uppercase">○○○.Co.,Ltd
                    </a>
                </p>

                <!-- {%FOOTER_LINK} -->
    </div>
  </footer>

  </div><!-- /page -->

  <script type="js/script.js"></script>
  <script type="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <script>
		var mySwiper = new Swiper ('.swiper-container', {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 10,
            centeredSlides : true,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            breakpoints: {
                767: {
                slidesPerView: 1,
                spaceBetween: 0
                }
            }
            })
	</script>
</body>
</html>