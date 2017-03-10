<?php

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

  <head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBQ74N');</script>
<!-- End Google Tag Manager -->
  <style>
.custom_info
{
  margin-top: 0px;
  padding-bottom: 20px;
}
#back-top{
  position:fixed;
  bottom:30px;
  left:50%;
  margin-left:570px
}

#back-top a{
  width:64px;
  display:block;
  text-align:center;
  font:11px/100% Arial, Helvetica, sans-serif;
  text-transform:uppercase;
  text-decoration:none;
  color:#bbb;
  /* background color transition */
  -webkit-transition:1s;
  -moz-transition:1s;
  transition:1s;
}

#back-top a:hover{color:#000;}
/* arrow icon (span tag) */

#back-top span{
  width:64px;
  height:64px;
  display:block;
  margin-bottom:7px;
  background:#ddd url(/images/up-arrow.png) no-repeat center center;
  /* rounded corners */
  -webkit-border-radius:15px;
  -moz-border-radius:15px;
  border-radius:15px;
  /* background color transition */
  -webkit-transition:1s;
  -moz-transition:1s;
  transition:1s;
}

#back-top a:hover span{background-color:#777}
</style>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // прячем кнопку #back-top
  $("#back-top").hide();
  
  // появление/затухание кнопки #back-top
  $(function (){
    $(window).scroll(function (){
      if ($(this).scrollTop() > 100){
        $('#back-top').fadeIn();
      } else{
        $('#back-top').fadeOut();
      }
    });

    // при клике на ссылку плавно поднимаемся вверх
    $('#back-top a').click(function (){
      $('body,html').animate({
        scrollTop:0
      }, 800);
      return false;
    });
  });
});
</script>
    <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
    <jdoc:include type="head" />

    <!-- The following line loads the template CSS file located in the template folder. -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

    <!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
    <?php if($this->direction == 'rtl') : ?>
    
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
    <?php endif; ?>
   
   <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/lightbox.min.js"></script>

    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/font/ubuntu/ubuntu.css" rel="stylesheet" />
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/lightbox.css" rel="stylesheet" />
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slick.css" rel="stylesheet" />
    <meta name="cmsmagazine" content="514f04b2a7feed8311452d55eddc6b7b" />

<!--    <script type="text/javascript">
    var _alloka = {
        objects: {
            '889bb4d7f3968e2e': {
                block_class: 'phone_alloka'
            }
        },
        trackable_source_types: ["utm"],
        last_source: true
    };
</script>
<script src="http://analytics.alloka.ru/v4/alloka.js" type="text/javascript"></script> -->

  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBQ74N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="bottomBg"></div>
    <div id="wrapper">
      <div id="header">
        <jdoc:include type="modules" name="header" style="xhtml" />
      </div>
	  <div id="breadcrumb">
        <jdoc:include type="modules" name="breadcrumb" style="xhtml" />
      </div>
<!--        --><?php //if ( JUri::base() === JUri::current() ):?>
<!-- --><?php //endif ;?>
    <div id="left">
        <jdoc:include type="modules" name="leftMenu" style="xhtml" />
        <?php if ( JUri::base() !== JUri::current() ):?>
            <style>.menu_left{
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius:0;
            }
                .right-menu{
                    border-top-left-radius: 0;
                    border-top-right-radius:0;
                }
                .banners {
                    width: 250px;
                }
                .banners a:first-of-type{
                    display: none;
                }
                .banners a{
                    margin-top: 20px;
                    display: inline-block;
                }
                .banners p{
                    margin-top: 0;
                }
                .center{
                    width: 830px;
                    clear: none;
                    float: right;
                    margin-bottom: 60px;
                }
                .item-page table{
                    width: 100%!important;
                }
                #left .right-menu .moduletable{
                    display: block;
                }
                #left .moduletable{
                    display: inline-block;
                }
                .menu_left li:last-of-type:after{
                    content: '';
                }
            </style>
            <div class="right-menu">
                <jdoc:include type="modules" name="right-menu" style="xhtml" />
            </div>
            <div class="form-consult">
                <jdoc:include type="modules" name="right-form" style="xhtml" />
            </div>
        <?php endif ;?>

        <jdoc:include type="modules" name="left" style="xhtml" />
        <?php if ( JUri::base() !== JUri::current() ):?>
        <div class="banners">
            <jdoc:include type="modules" name="banners" style="xhtml" />
        </div>
        <?php endif ;?>
    </div>
        <?php if ( JUri::base() === JUri::current() ):?>
            <div id="slider">
                <jdoc:include type="modules" name="slider" style="xhtml" />
                <div class="after">
                    <jdoc:include type="modules" name="after" style="xhtml" />
                </div>
            </div>
        <?php endif ;?>
                <?php if ( JUri::base() === JUri::current() ):?>
                    <div class="right_block">
                        <jdoc:include type="modules" name="right_block" style="xhtml" />
                    </div>
                <?php endif ;?>
      <div class="center">
          <?php if ( JUri::base() === JUri::current() ):?>
<div class="uslugi"><jdoc:include type="modules" name="uslugi_new" style="space" /></div>
<!--<div class="soli">
<span class="ssilka"><a href="/index.php/solevaja-zavisimost">узнать подробнее  &#8594;</a></span>
</div>
<div class="spice">
<span class="ssilka2"><a href="/index.php/lechenie-zavisimosti-ot-spaysa">узнать подробнее  &#8594;</a></span>
</div>-->
          <div class="banners">
              <jdoc:include type="modules" name="banners" style="xhtml" />
          </div>
          <?php endif ;?>
        <div id="component">
          <jdoc:include type="message" />
            <?php if ($this->countModules( 'before' )) : ?>
                <div class="before">
                    <jdoc:include type="modules" name="before" style="xhtml" />
                </div>
            <?php endif; ?>
          <jdoc:include type="component" />
            <?php if ( JUri::base() === JUri::current() ):?>
            <jdoc:include type="modules" name="news" style="xhtml" />
            <?php endif ;?>
        </div>
      </div>
        <?php if ( JUri::base() !== JUri::current() ):?>
            <div style="clear:both;">
                <jdoc:include type="modules" name="news" style="xhtml" />
            </div>

        <?php endif ;?>
      <div id="map">
<jdoc:include type="modules" name="map" style="xhtml" />
        </div>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/slick.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/site.js"></script>
      <div id="footer">
          <jdoc:include type="modules" name="position-7" style="xhtml" />
          <div class="footer-top">
              <jdoc:include type="modules" name="leftblin" style="xhtml" />
              <div class="right-menu">
                  <jdoc:include type="modules" name="right-menu" style="xhtml" />
              </div>
              <div class="right-menu">
                  <jdoc:include type="modules" name="footer" style="xhtml" />
                  <ul class="menu">
                      <li>
                          <a s href="http://www.np-stanovlenie.ru/index.php/karta-sajta">Карта сайта</a></ul>
                      </li>
              </div>
              <div class="footer_phone">
                <div class="line_1">Круглосуточная помощь<br>и консультация</div>
                <div class="line_2 phone_alloka">8 (800) 250-27-90</div>
                <div class="line_3">Звоните сейчас! Мы вам поможем!</div>
                <img src="/images/footer_girl.png" alt="" />
              </div>
          </div>
          <div class="footer-bottom">
              <div class="copy">
				Психологическую помощь оказывает:<br>
				Ассоциация 'Становление' ОГРН 1085500000596 , ИНН 5503114613<br>
				г. Омск, ул. 10 Лет Октября, дом 107
              </div>
               <div class="copy">
				Медицинские услуги оказывает:<br>
				ООО ''ММЦ Здоровье'', Лицензия № ЛО-55-01-001667 от 29.04.2015<br>
				644035, город Омск, проспект Губкина, дом 12, помещение 11П 
              </div>
              <div class="footer-vk">
                  <a href="https://vk.com/npstanovlenie" target="_blank">Мы в контакте</a>
                  <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
                  <div id="vk_like"></div>
                  <script type="text/javascript">
                      VK.init({apiId: 5005728, onlyWidgets: true});
                      VK.Widgets.Like("vk_like", {type: "mini"});
                  </script>
              </div>
              <div id="metrika">
                  <!-- Yandex.Metrika informer -->
                  <a href="http://metrika.yandex.ru/stat/?id=23293348&amp;from=informer"
                     target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23293348/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                         style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23293348,lang:'ru'});return false}catch(e){}"/></a>
                  <!-- /Yandex.Metrika informer -->
              </div>
              <div class="author">
                  Создание  продвижение сайта <br>
                  
				  <?php 
				   $home_or_not = ($_SERVER['REQUEST_URI'] == '/') ? TRUE : FALSE;
				   if ($home_or_not) {
				    echo '<a href="http://itb-company.com/" target="_blank">ITB-company</a>';
				   }else {
				    echo '<a href="http://itb-company.com/" target="_blank" rel="nofollow">ITB-company</a>';
				   }
				  ?>
              </div>
              <div class="copyright_absolute">
              	<p>© 2008 – 2017 гг. Все права защищены.</p>
				РЦ Становление - реабилитационный центр<br>
				для алкоголиков и наркоманов.
              </div>
          </div>

          <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=TnOcNQML4zV3tqrsVvWFBFCXJAuU2lC45gOvSYp7Dnptb1EfxDHY*7dwNOrdgQyEvAoMPqADtp///3qU0D0R3BKaTjgmthdU60Q8RMQi85t*IGt3tP8OMVYVIjQ7YfFwf3h*4t0nUB8HL/srRxYcP4zpHjgEvcgrMvF9s/rNaqU-';</script><!-- Top100 (Kraken) Counter -->
<script>
    (function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 4462797
        };
        try {
            w.top100Counter = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src =
    (d.location.protocol == "https:" ? "https:" : "http:") +
    "//st.top100.ru/top100/top100.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(window, document, "_top100q");
</script>
<noscript><img src="//counter.rambler.ru/top100.cnt?pid=4462797"></noscript>
<!-- END Top100 (Kraken) Counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23293348 = new Ya.Metrika({id:23293348,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23293348" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<p id="back-top">
    <a href="#top"><span></span>Вверх</a>
  </p>

  
<script type="text/javascript">
/* init Call Service */
var CallSiteId = 'e737d9d0af7c1615f5f1d4be7182126d';
var CallBaseUrl = '//uptocall.com';
(function() {
    var lt = document.createElement('script');
    lt.type ='text/javascript';
    lt.charset = 'utf-8';
    lt.async = true;
    lt.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + CallBaseUrl + '/widget/client.js';
    var sc = document.getElementsByTagName('script')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>

  </body>
</html>

<script type="text/javascript">
$( document ).ready(function() {
  $( ".latestnews-news" ).append( "<p style='margin: 5px 0 5px 0;'><a href='/index.php/stati'>Все статьи</a></p>" );

});
</script>
<!--<div  class="upTop blue"> 
    <div class="upTopZone"></div> 
  <div style="margin-top:740px;" class="upTopButton"></div> 

</div>
<script type="text/javascript">
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
      $('.upTop').fadeIn(200);
      $('.upTop').hover(function() {
        $('.upTopZone').fadeIn(100);
      }, function() {
        $('.upTopZone').fadeOut(100);
      });
    } else {
      $('.upTop, .upTopZone').fadeOut(200);
    }
  });
  $('.upTopZone, .upTopButton').click(function () {
    $('body, html').animate({scrollTop:0}, 1000);
  });
});
</script>-->