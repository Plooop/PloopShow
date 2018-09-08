<?php

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private");
session_start();

if(!@$_SESSION["pass"])

header("location: index.php?refuse=1");

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slideshow test</title>
<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.green.css">
<link rel="stylesheet" href="css/footer.css">
<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>

<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>


<section id="header">
<div id="titre">
    <img src="img2/v3.png" alt="Le Ploop Show !" />
</div>

<div id="menu">
<ul>
  <li><a href="#top">2012-2016</a></li>
  <li><a href="#m">2017</a></li>
  <li><a href="#m2">Printemps 2018</a></li>
  <li><a href="#m3">Ete 2018</a></li>
  <li><a href="#m4">Automne 2018</a></li>
</ul>
</div>
</section>

<div id="Ploop">
  <h2>Parlons peu, parlons de Ploop !</h2>
  <p>J'avais du temps à perdre alors j'ai décidé de regrouper toutes les photos de mon <em>vieil</em> ami <b>Ploop</b>.</br>
Il pousse, raquette après raquette, et j'ai eu envie de documenter son évolution.</br>
    Si jamais avez dans vos "archives" une photo où Ploop apparaît, même partiellement, n'hésitez pas à vous manifester !</p>
  <p>J'essaierai d'étoffer un peu cette page à l'avenir.</p>
    </div>
</div>

<h2 id="top">2012-2016</h2>
<div class="premier owl-carousel owl-theme">
    <div class="item"><img class="owl-lazy" data-src="img2/IMAG0060.jpg" src="img2/IMAG0060.jpg" alt="" /><div class="ic_caption">31 mars 2012</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160617_221319.jpg" src="img2/IMG_20160617_221319.jpg" alt="" /><div class="ic_caption">17 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_140835.jpg" src="img2/IMG_20160618_140835.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_141037.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_142431.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_143640.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_143735.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_144429.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160618_151836.jpg" alt="" /><div class="ic_caption">18 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160629_015310.jpg" alt="" /><div class="ic_caption">29 juin 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20160910_073039.jpg" alt="" /><div class="ic_caption">10 septembre 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20161218_203450.jpg" alt="" /><div class="ic_caption">18 décembre 2016</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/sep.png" alt="" /></div>
</div>

<h2 id="m">2017</h2>
<div class="second owl-carousel owl-theme">
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170407_173453.jpg" alt="" /><div class="ic_caption">7 avril 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170407_173646.jpg" alt="" /><div class="ic_caption">7 avril 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170407_174016.jpg" alt="" /><div class="ic_caption">7 avril 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170416_162539.jpg" alt="" /><div class="ic_caption">16 avril 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170416_162637.jpg" alt="" /><div class="ic_caption">16 avril 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170527_122006.jpg" alt="" /><div class="ic_caption">27 mai 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170527_122010.jpg" alt="" /><div class="ic_caption">27 mai 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170623_203710.jpg" alt="" /><div class="ic_caption">23 juin 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170902_172638.jpg" alt="" /><div class="ic_caption">2 septembre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170907_001135.jpg" alt="" /><div class="ic_caption">7 septembre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20170907_001150.jpg" alt="" /><div class="ic_caption">7 septembre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20171012_142236.jpg" alt="" /><div class="ic_caption">12 octobre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20171012_142258.jpg" alt="" /><div class="ic_caption">12 octobre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20171012_142316.jpg" alt="" /><div class="ic_caption">12 octobre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20171012_142326.jpg" alt="" /><div class="ic_caption">12 octobre 2017</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/sep.png" alt="" /></div>
</div>

<h2 id="m2">Printemps 2018</h2>
<div class="troisieme owl-carousel owl-theme">
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180528_163450.jpg" alt="" /><div class="ic_caption">28 mai 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180528_163456.jpg" alt="" /><div class="ic_caption">28 mai 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180329.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180337.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180350.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180403.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180437.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180457.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180605_180511.jpg" alt="" /><div class="ic_caption">5 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180610_172952.jpg" alt="" /><div class="ic_caption">10 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180610_173026.jpg" alt="" /><div class="ic_caption">10 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180610_211723.jpg" alt="" /><div class="ic_caption">10 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180610_211744.jpg" alt="" /><div class="ic_caption">10 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180613_175555.jpg" alt="" /><div class="ic_caption">13 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180622_170604.jpg" alt="" /><div class="ic_caption">22 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180622_170614.jpg" alt="" /><div class="ic_caption">22 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180622_170626.jpg" alt="" /><div class="ic_caption">22 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180624_183355.jpg" alt="" /><div class="ic_caption">24 juin 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/sep.png" alt="" /></div>
</div>

<h2 id="m3">Ete 2018</h2>
<div class="quatrieme owl-carousel owl-theme">
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220310.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220317.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220326.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220340.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220350.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180702_220412.jpg" alt="" /><div class="ic_caption">2 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180726_212115.jpg" alt="" /><div class="ic_caption">26 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180726_212156.jpg" alt="" /><div class="ic_caption">26 juillet 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180831_131343.jpg" alt="" /><div class="ic_caption">31 août 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180831_131356.jpg" alt="" /><div class="ic_caption">31 août 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180831_131402.jpg" alt="" /><div class="ic_caption">31 août 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180831_131416.jpg" alt="" /><div class="ic_caption">31 août 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180831_131446.jpg" alt="" /><div class="ic_caption">31 août 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/sep.png" alt="" /></div>
</div>

<h2 id="m4">Automne 2018</h2>
<div class="dernier owl-carousel owl-theme">
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_130740.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_130757.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_130814.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_130858.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_130931.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/IMG_20180907_131315.jpg" alt="" /><div class="ic_caption">7 septembre 2018</div></div>
    <div class="item"><img class="owl-lazy" data-src="img2/sep.png" alt="" /></div>
</div>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.js"></script>
<script src="random.js"></script>


</body>
</html>
