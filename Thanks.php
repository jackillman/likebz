<?php
session_start(); 

$name = $_SESSION['name'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];




?>

<html lang="ru">
<head>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '139502570058979');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=139502570058979&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47358584 = new Ya.Metrika2({
                    id:47358584,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47358584" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47359066 = new Ya.Metrika2({
                    id:47359066,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47359066" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->





<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<meta http-equiv="Content-Language" content="ru">
<meta http-equiv="Content-Type" content="text/html; utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Страница благодарности</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    body {
        line-height: 1;
        
        font-family: Arial;
        font-size: 15px;
        color: #fff;
        width: 100%;
        height: 100%;
/*        max-height: 700px;*/
        padding: 0;
        margin: 0;
        background: #161825;
       

    }
    .wrap{
        background: url(img/bg-th22.jpg) no-repeat center;
        height: 100%;
        background-size:cover;
        padding-top: 40px;
    }
    h2 {
        margin: 0;
        padding: 0;
        font-size: 36px;
        line-height: 44px;
        color: #fff;
        text-align: center;
        font-weight: bold;
    }
    a {
        color: orange;
    }
    a:hover {
        color: #d1b465;
    }
    .list_info li span {
        padding-right: 5px;
        display: inline-block;
        font-weight: bold;
        font-style: normal;
    }
    .list_info li #ord{
        width: auto;
    }
    .list_info {
        text-align: left;
        display: inline-block;
        list-style: none;
        padding: 0;
    }
    .list_info li {
        margin: 11px 0px;
    }
    .fail {
        margin: 25px 0 20px 0px;
        text-align: center;
    }
    .email {
        position: relative;
        text-align: center;
        margin-top: 40px;
    }
    .email input {
        height: 30px;
        width: 200px;
        font-size: 14px;
        padding-right: 10px;
        padding-left: 10px;
        outline: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 1px solid #B6B6B6;
        margin-bottom: 10px;
    }
    .block_success {
        
        max-width: 960px;
        padding: 50px 30px 10px 30px;
        margin: 0px auto 40px;
        background: rgba(33,33,33,0.5);
        box-shadow: 2px 2px 10px #333
    }
    .success {
        text-align: center;
         
    }

    .btn-back{
        margin: 0 auto;
        display: block;
        max-width: 370px;
        height: 55px;
        line-height: 55px;
        background-color: #FF5806;
        border: none;
        outline: none;
        transition: background-color 0.5s ease;
        text-align: center;
        text-decoration: none;
        font-size: 30px;
        color: #FFFFFF;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        cursor: pointer;
    }
    .btn-back:hover {
        background-color: #2c3e50;
        color: #fff;
        text-decoration: none;
    }
    .promo-item{
            max-width: 390px;
            padding: 15px;
            background-color: rgba(20, 20, 20, .6);
            font-weight: bold;
            font-size: 20px;
            color:#fff;
    }
    .promo-product{
        max-width: 253px;
        padding: 8px 15px;
        font-size: 30px;
        text-transform: uppercase;
        background-color: rgba(20, 20, 20, .6);
        font-weight: bold;
        color:#fff;
    }
    .promo-btn{

        display: block;
        width: 340px;
        padding: 12px 30px;
        background: #ff3b3b;
        border-radius: 28px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 22px;
        color: white;
        font-weight: bold;
        transition: all 2s;
    }
    .promo-btn:hover {
        background-color: #2c3e50;
        color: #fff;
        text-decoration: none;
    }
    .promo-box{
        padding-top: 40px;
    }
    
    .promo-box-img img{
        float: right;
/*        width: 100%;*/
        height: 100%;
        max-width: 192px;
        max-height: 270px;
    }
    .promo{
         margin-top: 20px;
    }
    .imgmob{
        display: none;
    }
    .imgdesk{
        display: block;
    }
    @media (max-width: 992px){
        -webkit-background-size: auto;
        background-size: auto;
    }
    
    @media (max-width: 768px){
    .promo{
         margin-top: 0px;
    }
    .block_success {
        
        padding-top: 20px;
        width: 90%;
       
        
    }
    .promo-box{
        padding-top: 40px;
    }
        .promo-box-img img{
            float: none;
            margin: 0 auto 10px;
            display: block;
            text-align: center;
            width: auto;
        }
        .promo-item{
            width: auto;
            font-size:16px;
        }
        .promo-product{
            font-size: 24px;
        }
        .promo-btn{
            width: auto;
            margin-bottom: 30px;
            
        }
        body{
            height: auto;
        }
        h2{
            font-size: 26px;
            line-height: 26px;
        }
        h3.success{
            font-size: 16px;
        }
        .btn-back{
            max-width: 280px;
            font-size: 20px;
        }
        .imgmob{
            display: block!important;
        }
        .imgdesk{
            display: none!important;
        }
    }
     @media (max-width: 400px){
        .promo-item{
            
            font-size:12px;
        }
        .promo-product{
            font-size: 18px;
        }
         .wrap{
             height: 100%;
         }
        h2{
             font-size: 22px;
         }
    }
    @media (max-width: 600px){
         .wrap{
             height: 100%;
         }
        .promo-box-img img{
            height: auto;
            margin-top: 15px;
            max-width: 65px;
           
        }
        
    }
</style>
  
</head>



<script>
  fbq('track', 'Lead');
</script>

<body>


<div class="wrap">
	

    <div class="block_success">					
        <h2 style="text-transform: uppercase;">Поздравляем! Ваша заявка на участвие принята!</h2>
        <p class="success">
            
        </p>
        <h3 class="success">
            Проверьте правильность введенной Вами информации
        </h3>
        <div class="success">
            <ul class="list_info">
                <li><span>Имя:  </span><span class="datas" id="client"><?= $name; ?></span></li>
                <li><span>Телефон:</span><span class="datas" id="tel"><?= $phone ?></span></li>
                <li><span>Email:</span><span class="datas" id="email"><?= $email ?></span></li>

            </ul>
            <br/><span id="submit"></span>
        </div>
        
        <p class="fail success">Если Вы допустили ошибку при заполнении формы, <b> <a href="javascript: history.back(-1);">пожалуйста оформите заявку еще раз.</a></b></p>
        <p class="fail success">Мы отправили Вам на Email письмо, если Вы не найдете его в папке "Входящие", то возможно оно ошибочно попало в папку "Спам"</p>
    </div>

    <a class="btn-back" href="javascript: history.back(-1);">Вернуться на главную</a>
    
   
</div>   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
