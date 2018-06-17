<?php
	include_once "header.php";
?>

<div class="animated slideInLeft">
    <ul id="slogan" class="fontsforweb_fontid_7349">
        <li>Единый</li><br>
        <li>справочник</li><br>
        <li><span class="accent">социального блага</span></li><br>
        <li>в Астане</li>
    </ul>

    <a href="howitworks.php" class="btn btn-main">Как это работает?</a>
    <a href="wanttohelp.php" class="btn btn-main">Хочу помочь</a>
</div>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '9T8SNp1rj7';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script type="text/javascript">
			 var images = ['/img/0.jpg', '/img/1.jpg', '/img/2.jpg', '/img/3.jpg', '/img/4.jpg'];
			 var i = 0;
			 var n = 0;

			 setInterval(function(){

				 var maxImages = 4, path = 'img/';
				 var element = document.getElementById('body');
				 if(n >= 4) n = 0;
				 else n = n + 1;
				 element.style.backgroundImage = 'url("' + path + n + '.jpg")';

			 }, 5000);
</script>

<?php
	include_once "footer.php";
?>
