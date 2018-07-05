/*---------------------------------------------------------------
* Modal Window JS
----------------------------------------------------------------*/
$(function(){
    //Modal Open Action
    $('#Modal_Open').click(function(){
        //ボタンからフォーカスを外す
        $(this).blur();

        //新しくモーダルウィンドウを起動しない
        if($('#Modal_Overlay')[0]) return false;

        //Overlay用divを生成
        $('body').append('<div id="Modal_Overlay"></div>');
        //Fade In
        $('#Modal_Overlay').fadeIn(250);

        //センタリング
        centeringModalSyncer();
        //Fade In
        $('#Modal_Content').fadeIn(250);

        //Modal Enter Action
        $('#Modal_Enter').click(function(){
            //Checkbox
            if($('#Modal_Cbox').is(':checked')){
                alert('チェックされています。');
            }
        });

        //Modal Close Action
        $('#Modal_Overlay, #Modal_Close').unbind().click(function(){
            //Fade Out
            $('#Modal_Content, #Modal_Overlay').fadeOut(250,function(){
                //Overlay Remove
                $('#Modal_Overlay').remove();
            });
        });
    });
    
    //リサイズされた場合、センタリング
    $(window).resize(centeringModalSyncer);
    
    //センタリング関数
    function centeringModalSyncer(){

        //Windowの幅、高さを取得
        var w = $(window).width();
        var h = $(window).height();

        //Modal_Contentの幅、高さを取得
        var cw = $('#Modal_Content').outerWidth();
        var ch = $('#Modal_Content').outerHeight();

        //センタリング処理
        $('#Modal_Content').css({'left': ((w - cw)/2) + 'px',
                                 'top': ((h - ch)/2) + 'px'});
    }
});