<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/tingle.min.css">
  <style>
    .tingle-demo {
  display: none;
  }
  </style>
</head>
<body>

<button class="js-tingle-modal-3">Big content? No problem!</button>

<div class="tingle-demo tingle-demo-big">
<h1 class="plop">Big content with scroll</h1>
<p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<img src="https://placehold.it/800x400" height="400" alt="">
<p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<img src="https://placehold.it/800x400" height="400" alt="">
<p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
</div>




<div class="row flow-offset-3">

<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
        <a href="images/page-01_img02modal.jpg" class="modal" data-modaal-desc="My Description"><!-- モーダル -->
        <img src="images/page-01_img02.jpg" class="round" alt="" />
        </a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
        <h5 class="text-secondary-3">外構工事</h5>

        <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
        <a href="images/page-01_img03modal.jpg" class="modal" data-modaal-desc="My Description"><!-- モーダル -->
        <img src="images/page-01_img03.jpg" class="round" alt="" />
        </a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
        <h5 class="text-secondary-3">造成工事</h5>

        <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
        <a href="images/page-01_img04modal.jpg" class="modal" data-modaal-desc="My Description"><!-- モーダル -->
        <img src="images/page-01_img04.jpg" class="round" alt="" />
        </a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
        <h5 class="text-secondary-3">舗装工事</h5>

        <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>

    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
        <a href="images/page-01_img05modal.jpg" class="modal" data-modaal-desc="My Description"><!-- モーダル -->
        <img src="images/page-01_img05.jpg" class="round" alt="" />
        </a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle"></a>
        <h5 class="text-secondary-3">ドローン撮影</h5>

        <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>

    </div>
</div>

</div>  

<script src="tingle/tingle.js"></script>
    <script type="text/javascript">

    /**
    * Modal Tiny no footer
    */

    var modalTinyNoFooter = new tingle.modal({
        onClose: function() {
            console.log('close');
        },
        onOpen: function() {
            console.log('open');
        },
        beforeOpen: function() {
            console.log('before open');
        },
        beforeClose: function() {
            console.log('before close');
            return true;
        },
        cssClass: ['class1', 'class2']
    });
    var btn = document.querySelector('.js-tingle-modal-1');
    btn.addEventListener('click', function(){
        modalTinyNoFooter.open();
    });
    modalTinyNoFooter.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

    /**
    * Modal tiny with btn
    */

    var modalTinyBtn = new tingle.modal({
        footer: true
    });
    var btn2 = document.querySelector('.js-tingle-modal-2');

    btn2.addEventListener('click', function(){
        modalTinyBtn.open();
    });

    modalTinyBtn.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

    modalTinyBtn.addFooterBtn('Primary action', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function() {
        alert('click on primary button!');
    });

    modalTinyBtn.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function(){
        modalTinyBtn.close();
    });

    modalTinyBtn.addFooterBtn('Danger!', 'tingle-btn tingle-btn--danger', function(){
        alert('click on danger button!');
    });

    /**
    * Modal big
    */

    var modalBigContent = new tingle.modal();
    var btn3 = document.querySelector('.js-tingle-modal-3');
    btn3.addEventListener('click', function(){
        modalBigContent.open();
    });
    modalBigContent.setContent(document.querySelector('.tingle-demo-big').innerHTML);

    /**
    * Modal big with sticky footer
    */
    var modalStickyFooter = new tingle.modal({
        footer: true,
        stickyFooter: true
    });
    var btn4 = document.querySelector('.js-tingle-modal-4');
    btn4.addEventListener('click', function(){
        modalStickyFooter.open();
    });


    modalStickyFooter.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function(){
        modalStickyFooter.close();
    });

    modalStickyFooter.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function(){
        modalStickyFooter.close();
    });

    modalStickyFooter.setContent(document.querySelector('.tingle-demo-sticky').innerHTML);

    /**
    *   Force close button
    */

    var modalButtonOnly = new tingle.modal({
        closeMethods: [],
        footer: true,
        stickyFooter: true
    });
    var btn5 = document.querySelector('.js-tingle-modal-5');
    btn5.addEventListener('click', function(){
        modalButtonOnly.open();
    });
    modalButtonOnly.setContent(document.querySelector('.tingle-demo-force-close').innerHTML);

    modalButtonOnly.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function(){
        modalButtonOnly.close();
    });

    modalButtonOnly.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function(){
        modalButtonOnly.close();
    });

    /**
    *   Modal suprise
    */
    var btn6 = document.querySelector('.js-tingle-modal-6');
    btn6.addEventListener('click', function(){
        var modalSurprise = new tingle.modal({
            onClose: function(){
                modalSurprise.destroy();
            }
        });
        modalSurprise.setContent('<iframe width="100%" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>');
        modalSurprise.open();
    });

    </script>
</body>
</html>