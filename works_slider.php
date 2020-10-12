<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="utf-8">
  <title>Swiper</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      cursor: pointer;
      text-align: center;
      font-size: 18px;
      background: #fff;
      border: 2px solid;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

  .works_image{
    max-width: 100%;
    height: 200px;
  }
  .works_title{
    line-height: 3em;
    margin: 0 auto;
    background-color: #fff;
    opacity: 0.8;
  }

  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img05.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img04.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img03.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img05.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img04.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img03.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img05.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img04.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
      <div class="swiper-slide">
        <div class="works_image" style="background-image: url(images/page-01_img03.jpg); "><div class="works_title">バイパス災害復旧工事</div></div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      loop: true,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
    });
  </script>

</body>

</html>