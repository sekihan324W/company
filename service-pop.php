<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/tingle.min.css">
      <style>
        .d-none{
          display: none;
        }
      </style>
    </head>
	<body>


  <div class="row flow-offset-3">

  <div class="col-lg-3 col-md-6 col-sm-6">
  <div class="box-skin">
      <div class="py-1">
        <a href="" class="btn btn-lg" data-modal="#modal__content1"><img src="images/page-01_img02.jpg" class="round" alt="" /></a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle" data-modal="#modal__content1"></a>
        <h5 class="text-secondary-3">外構工事</h5>
      </div><!-- /py-1 -->
      <div class="d-none">
        <div id="modal__content1">
            <div class="jumbotron jumbotron-fluid">
            </div>
            <div class="inner">
            <img src="images/page-01_img02modal.jpg" height="400" alt="">
            <h5 class="text-secondary-3">外構工事</h5>
            <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
            </div>
        </div>
      </div><!-- /d-none -->
    </div><!-- /box-skin -->
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
      <div class="py-2">
        <a href="" class="btn btn-lg" data-modal="#modal__content2"><img src="images/page-01_img03.jpg" class="round" alt="" /></a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle" data-modal="#modal__content2"></a>
        <h5 class="text-secondary-3">造成工事</h5>
      </div><!-- /py-2 -->
      <div class="d-none">
        <div id="modal__content2">
            <div class="jumbotron jumbotron-fluid">
            </div>
            <div class="inner">
            <img src="images/page-01_img03modal.jpg" height="400" alt="">
            <h5 class="text-secondary-3">造成工事</h5>
            <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
            </div>
        </div>
      </div><!-- /d-none -->
    </div><!-- /box-skin -->
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
      <div class="py-3">
        <a href="" class="btn btn-lg" data-modal="#modal__content3"><img src="images/page-01_img04.jpg" class="round" alt="" /></a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle" data-modal="#modal__content3"></a>
        <h5 class="text-secondary-3">舗装工事</h5>
      </div><!-- /py-3 -->
      <div class="d-none">
        <div id="modal__content3">
            <div class="jumbotron jumbotron-fluid">
            </div>
            <div class="inner">
            <img src="images/page-01_img04modal.jpg" height="400" alt="">
            <h5 class="text-secondary-3">舗装工事</h5>
            <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
            </div>
        </div>
      </div><!-- /d-none -->
    </div><!-- /box-skin -->
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="box-skin">
      <div class="py-4">
        <a href="" class="btn btn-lg" data-modal="#modal__content4"><img src="images/page-01_img05.jpg" class="round" alt="" /></a>
        <a href="#" class="btn btn-lg primary-color fa-play-circle" data-modal="#modal__content4"></a>
        <h5 class="text-secondary-3">ドローン撮影</h5>
      </div><!-- /py-4 -->
      <div class="d-none">
        <div id="modal__content4">
            <div class="jumbotron jumbotron-fluid">
            </div>
            <div class="inner">
            <img src="images/page-01_img05modal.jpg" height="400" alt="">
            <h5 class="text-secondary-3">ドローン撮影</h5>
            <p class="line-height">京浜港ケーソンヤードの周辺既設万代塀を撤去しフェンスを新設いたしました。<br>
            2018年(平成30年)8月〜2018年(平成30年)12月</p>
            </div>
        </div>
      </div><!-- /d-none -->
    </div><!-- /box-skin -->
    </div>

                


        <script src="js/tingle.min.js"></script>
        <script>
            var modalContent = "";
            // instanciate new modal
            var modal = new tingle.modal({
                beforeClose: function() {
                    modal.setContent("");
                    return true; // close the modal
                }
            });
            // data-modal属性を持つトリガーボタンを取得
            var modalTrigger = document.querySelectorAll('[data-modal]');
            if(modalTrigger.length > 0){
                for (let i = 0; i < modalTrigger.length; i++) {
                    var el = modalTrigger[i];
                    //イベントをバインド
                    _addModalEvent(el);
                }
            }
            function _addModalEvent(el){
                el.addEventListener('click',function(event){
                    event.preventDefault();
                    // data-modalに指定したIDの要素を取得
                    var target = el.getAttribute('data-modal');
                    // モーダルのコンテンツを取得
                    var modalContent = document.querySelector(target);
                    if(modalContent){
                        // コンテンツをセット
                        modal.setContent(modalContent.innerHTML);
                        // モーダルオープン
                        modal.open();
                    }
                })
            }
        </script>
	</body>
</html>