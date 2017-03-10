(function($) {
  //  $("img.lazy").lazyload({effect: "fadeIn", event: "load"});

if($('.mod_staff').length > 0) {
    $('.mod_staff').slick({
        slidesToShow: 1,
        dots: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 500,
        slidesToScroll: 1
    });
}

    $(window).load(function() {
        $('div#uptocall-mini-main').attr('onclick', 'yaCounter23293348.reachGoal(\'uptucall\'); return true;');
    });
    $(document).ready(function() {

        $('form#simpleForm2_110 input[type=submit]').attr('onclick', 'yaCounter23293348.reachGoal(\'ORDER\'); return true;');
/*    $('.FormTo').click(function() {
        var top = $('.moduletable-simple').position().top;
        $('html, body').animate( {scrollTop : top}, 600);
    });*/
    });

    $.fn.jfontsize = function(opcoes) {
        var $this=$(this);
        var defaults = {
            btnMinusClasseId: '#jfontsize-minus',
            btnDefaultClasseId: '#jfontsize-default',
            btnPlusClasseId: '#jfontsize-plus',
            btnMinusMaxHits: 5,
            btnPlusMaxHits: 5,
            sizeChange: 1
        };

        if(($.isArray(opcoes))||(!opcoes)){
            opcoes = $.extend(defaults, opcoes);
        } else {
            defaults.sizeChange = opcoes;
            opcoes = defaults;
        }

        var limite=new Array();
        var fontsize_padrao=new Array();

        $(this).each(function(i){
            limite[i]=0;
            fontsize_padrao[i];
        })

        $('#jfontsize-minus, #jfontsize-default, #jfontsize-plus').removeAttr('href');
        $('#jfontsize-minus, #jfontsize-default, #jfontsize-plus').css('cursor', 'pointer');

        /* Ação do Botão A- */
        $('#jfontsize-minus').click(function(){
            $this.each(function(i){
                if (limite[i]>(-(opcoes.btnMinusMaxHits))){
                    fontsize_padrao[i]=$(this).css('font-size');
                    fontsize_padrao[i]=fontsize_padrao[i].replace('px', '');
                    fontsize=$(this).css('font-size');
                    fontsize=parseInt(fontsize.replace('px', ''));
                    fontsize=fontsize-(opcoes.sizeChange);
                    fontsize_padrao[i]=fontsize_padrao[i]-(limite[i]*opcoes.sizeChange);
                    limite[i]--;
                    $(this).css('font-size', fontsize+'px');
                }
            })
        })

        /* Ação do Botão A */
        $('#jfontsize-default').click(function(){
            $this.each(function(i){
                limite[i]=0;
                $(this).css('font-size', fontsize_padrao[i]+'px');
            })
        })

        /* Ação do Botão A+ */
        $('#jfontsize-plus').click(function(){
            $this.each(function(i){
                if (limite[i]<opcoes.btnPlusMaxHits){
                    fontsize_padrao[i]=$(this).css('font-size');
                    fontsize_padrao[i]=fontsize_padrao[i].replace('px', '');
                    fontsize=$(this).css('font-size');
                    fontsize=parseInt(fontsize.replace('px', ''));
                    fontsize=fontsize+opcoes.sizeChange;
                    fontsize_padrao[i]=fontsize_padrao[i]-(limite[i]*opcoes.sizeChange);
                    limite[i]++;
                    $(this).css('font-size', fontsize+'px');
                }
            })
        })
    };
    $('p').jfontsize();
}(jQuery))

jQuery(document).ready(function($){
    $('.FormTo').on('click', function(){
        $('#simpleForm2_128').show();
    });    
    $('.sf_background').on('click', function(){
        $('#simpleForm2_128').hide();
    });    
    $('.ex').on('click', function(){
        $('#simpleForm2_128').hide();
    });
    var cur_id = 0;
    /*$('.regali').mouseenter(function(){

        if ( cur_id != $(this).attr('id') ) {
            var top = $(this).offset().top + $(this).height();
            var left = $(this).offset().left-100;
            $("div#regal_frame").remove();
            $('body').append('<noindex><div id="regal_frame"></div></noindex>');
            $("div#regal_frame").load('/nashi-sotrudniki #'+$(this).attr('id'));
            $("div#regal_frame").offset({top:top, left:left});
            cur_id = $(this).attr('id');
        } 
    });*/
    $('.sertificatos').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
    });
    $("body").on('mouseleave',"div#regal_frame",function(){
        $("div#regal_frame").remove();
    });

});