$(window).resize(function() {
  //リサイズされたときの処理
            var w = $('.works_item').width();
            console.log(w);
            $('.works_image').height(w)
        });

        

    // TOPに戻る
    $(function(){
    var pagetop = $('#page_top');
    // ボタン非表示
    pagetop.hide();
    // 300px スクロールしたらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
    });