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
  <script src="js/jquery.rd-navbar.js"></script>
  <script src="js/camera.min.js"></script> 
    <script>
    jQuery(function(){			
        jQuery('#camera').camera({
            height: "50%",		// 高さ
            portrait: false,		// 画像の引き伸ばしの有無（false/true）
            pagination: true,		// NEXT・PREVボタンの有無（false/true）
            playPause: false,		// 再生・停止ボタンの有無（false/true）
            pauseOnClick: false,		// 画像クリックで停止しない・する（false/true）
        });
    });
    </script>
</head>

<body>
  <div class="page">

<!--========================================================
                              HEADER
    =========================================================-->
    <header>
            <section>

                <!-- Navigation Menu -->
                <div id="stuck_container" class="stuck_container">
                    <div class="container">
                        <nav class="nav" id="global-nav">
                            <ul class="sf-menu global-list" data-type="navbar">
                                <li class="active">
                                    <a href="./">ホーム</a>
                                </li>
                                <li>
                                    <a href="about.php">企業情報</a>
                                </li>
                                <li>
                                    <a href="works.php">施工事例</a>

                                </li>
                                <li>
                                    <a href="recruit.php">求人情報</a>

                                </li>
                                <li>
                                    <a href="contact.php">お問い合わせ</a>
                                </li>
                            </ul>
                        </nav>

                        <ul class="inline-list">
                            <li><a href="#" class="icon icon-xs icon-secondary fa-map-marker"></a></li>
                            <li><a href="/cdn-cgi/l/email-protection#2a09"
                                    class="icon icon-xs icon-secondary fa fa-envelope"></a></li>
                            <li><a href="callto:#" class="icon icon-xs icon-secondary fa fa-phone"></a></li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="bg-secondary-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-sm-center text-md-left">
                            <div class="brand">
                                <h1 class="brand_name">
                                    <a href="./">○△建設株式会社</a>
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
            <!-- Section -->
            <!-- section class="well-6 bg-secondary-2">

                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center text-lg-right">
                        <img src="images/page-01_img02modal.jpg" alt="" />
                    </div>

                    <div class="col-lg-6 col-md-12 inset-3 text-center text-lg-left">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-6" style="position: relative;">
                                    <h2 class="text-center text-lg-left">5つの事業で創る</h2>
                                    <h6 class="small normal text-center text-lg-left text-primary">施工事例</h6>

                                    <p class="big-1 offset-3 font-family-2 text-secondary-2">
                                    長年の建設で培った技術力・企画力・情報力及び経験を活かし、5つの事業を中心に安心のある快適な環境を提供しています。
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section -->
            <!-- END Section -->

            <!-- Section -->
            <section class="well-3 text-center">
                <div class="container">

                <h3>お問い合わせ</h3>

                <p>弊社へのお問い合わせは下記フォームに記入をお願いいたします。<br>お問い合わせいただいた内容は、今後の弊社の業務の参考にさせていただきます。<br>なお、記入いただきました個人情報につきましては、お問い合わせに関する目的以外には使用いたしません。</p>
                
                <div class="well-6">
                <table class="table_main01">
                <tbody><tr>
                  <th class="tablehead01 cnt_cnf">お問い合わせ項目<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                              <select name="inquiry_type" required="" class="contact_form_table01 ">
                    <option value="" selected="">選択してください</option>
                    <option value="1">土木技術</option><option value="2">建築技術</option><option value="3">環境技術</option><option value="4">リニューアル</option><option value="5">採用</option><option value="6">その他</option>            </select>
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">お名前<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <input type="text" class="contact_form_table03 " name="name" value="" size="" maxlength="200" required="">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">お名前（フリガナ）<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <input type="text" class="contact_form_table03 " name="kana" value="" size="" maxlength="200" required="">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">会社・団体・組織名<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <input type="text" class="contact_form_table03 " name="company" value="" size="" maxlength="200" required="">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01">所属部署･役職</th>
                  <th class="tablehead01 cnt_cnf2"></th>
                  <td class="cnt_cnf3">
                                  <input type="text" class="contact_form_table03 " name="section" value="" size="" maxlength="200">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">メールアドレス<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <input type="email" class="contact_form_table03 " name="mail" value="" size="" maxlength="300" required="">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">電話番号<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <input type="tel" class="contact_form_table03 " name="tel" value="" size="" maxlength="20" required="">
                  </td>
                </tr>
                <tr>
                  <th class="tablehead01 cnt_cnf">お問い合わせ内容<i class="cnt_cnf_tag02">必須</i></th>
                  <th class="tablehead01 cnt_cnf2"><i class="cnt_cnf_tag01">必須</i></th>
                  <td class="cnt_cnf3">
                                  <textarea class="contact_form_table04 " name="comment" required=""></textarea>
                  </td>
                </tr>
              </tbody></table></div>

              <div class="contact_solid_txt_btn_area">
              <button type="submit" name="conf" value="1" class="contact_solid_txt_btn0">入力内容を確認する &gt;</button>
              </div>
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
                   <h5>○△建設株式会社</h5>
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

                <p class="privacy-policy">○△建設株式会社
                    <span>© &#160;</span><span id="copyright-year"></span>&#160;<a href="#"
                        class="big-1 uppercase">○△Construction Co., Ltd.
                    </a>
                </p>

                <!-- {%FOOTER_LINK} -->
    </div>
  </footer>

  <div id="page_top"><a href="#"><i class="fas fa-arrow-up"></i></a></div>
  </div><!-- /page -->
  <!-- script type="js/script.js"></script -->
  <script type="js/script2.js"></script>
</body>
</html>