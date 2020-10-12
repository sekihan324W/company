
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAND4U swiper デモ</title>
   
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css"> -->
    <style type="text/css">
        .swiper-container {
    width: 800px;
    height: 300px;
}
.swiper-container img{
    width: 100% !important;
    height: auto;
}

    </style>

</head>
<body>
    
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./images/page-01_img03.jpg" alt=""></div>
          <div class="swiper-slide"><img src="./images/page-01_img04.jpg" alt=""></div>
          <div class="swiper-slide"><img src="./images/page-01_img05.jpg" alt=""></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script> -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
      // ここからはオプションです。
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
});
    </script>

<script type="js/swiper.min.js"></script>
  <script>
		var mySwiper = new Swiper ('.swiper-container', {
            loop: true,
            effect: 'slide',
            slidesPerView: 4,
            spaceBetween: 5,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                767: {
                slidesPerView: 1,
                spaceBetween: 0
                }
            }
            });
	</script>

</body>
</html>
