<!DOCTYPE html>

<html>



<head>







<meta charset="utf-8">

<link rel="shortcut icon" href="https://bitcoinsinrussia.com/logo.png" type="image/png">

<meta name="КАК ПРОХОДИТ ПОКУПКА БИТКОИНА" content="КАК ПРОХОДИТ ПОКУПКА БИТКОИНА">


<title>
КАК ПРОХОДИТ ПОКУПКА БИТКОИНА
</title>


<link rel="stylesheet" href="style.css">



<style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
</style>



<!-- This code below is a part of price refreshig-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script> 


<script>

setInterval
(

function()

{  
$('#content').load('load.php');  
}, 

60000);

</script> 












</head>


<body>

<center>
<h1>
<small><small><small>
<div class="c">


<big><big><big style="color: #BA0054">
КАК<br style="line-height: 33px"/>
ПРОХОДИТ<br style="line-height: 33px"/>
ПОКУПКА<br style="line-height: 33px"/>
БИТКОИНА
</big></big></big>
<br>
<br style="line-height: 1px"/>
<i>АНОНИМНО и БЕЗ РИСКА</i>
<br>
<br>
<a>_______</a>
<br><br>
<big><big><i>Расчёты</i><br></big></big>
<br>

При покупке вы<br>
остаётесь полностью анонимным<br>
и всё организовано так, что<br>
вы ничем не рискуете
<br>
<br>

Расчёты идут через<br>
Терминалы, которые есть<br>
в каждом городе<br>
<br>
Наши Биткоин-платежи<br>
проходят мгновенно<br>
(за 1-2 секунды) и<br>
являются бесплатными<br>
<br>
Вы можете купить<br>
любое количество Биткоинов<br>
или любую часть Биткоина<br>
<br>

Чтобы вы не волновались,<br>
мы рекоммендуем проводить<br>
расчёты по частям: очень<br>
малыми суммами<br>
<br>
Например, сначала<br>
вы сдаёте 5 000 рублей и<br>
получаете Биткоин на эту сумму<br>
<br>
затем сдаёте следующие сумму<br>
и снова получаете Биткоин<br>
<i>И так далее</i><br>
<br>

“Сумму сдавания” вы<br>
выбираете сами — вы можете<br>
сдавать даже по 100 рублей<br>
<br>

Все расчёты могут занять<br>
немного больше времени, зато<br>
вы будете полностью спокойны<br>

<a>_______</a>
<br><br>
<big><big><i>Курс Биткоина</i></big></big>
<br>
<br>
Покупка всегда<br>
проходит по текущему курсу —<br>
без дополнительных комиссий<br>
<br>
Текущий курс вы всегда<br>
можете видеть на этом сайте<br>
<br>
<br>








<div id="content"> 




<center>




<center>
<big><big><big><big><big style="color: #BA0054">
<?php
define("LINK", 'https://api.cryptonator.com/api/ticker/btc-rur');
$data = file_get_contents(LINK);
$courses = json_decode($data, true);
echo (int) (($courses['ticker']['price'])*1.05);
?>
</big></big></big></big></big><br>
<i>Текущий курс на<br>
данный момент</i>

 






  <table align="center" width="300px">
   <tr>
    <td height="55">
        <center>

<p  style="color: gray" id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 60000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "0"+ minutes + ":" + seconds;



  if (distance == 60000) {
   
    document.getElementById("demo").innerHTML = "0"+ minutes + ":" + "0"+ seconds;
  }


  // If the count down is finished, write some text 
  if (distance < 10000) {
   
    document.getElementById("demo").innerHTML = "0"+ minutes + ":" + "0"+ seconds;
  }

    // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = " ";
  }


}, 1000);
</script>

</center>

    </td>
   </tr> 
  </table> 






</center>












    
</div>  








На каждое сдавание денег<br>
может быть свой текущий курс<br>

<a>_______</a>
<br><br>
<big><big><i>Адреса Терминалов</i></big></big>
<br>
<br>
Когда вы готовы<br>
к посещению Терминала, мы<br>
сообщаем вам адреса Терминалов<br>
<br>
Вы сами выбираете<br>
любой Терминал в вашем городе,<br>
и вам не нужно сообщать нам<br>
какой Терминал вы выбрали<br>


<a>_______</a>
<br><br>
<big><big><i>Мгновенные платежи</i></big></big>
<br>
<br>
Все наши Биткоин-платежи<br>
проходят мгновенно и<br>
являются бесплатными, потому<br>
что мы отправляем вам Биткоин<br>
через Lightning Network<br>
<br>
<i>
LN (Lightning Network) —<br>
это простая в использовании<br>
технология, которая делает<br>
Биткоин-платежи быстрыми<br>
как молния и бесплатными<br>
</i>
<br>
Вы можете познакомиться <br>
с этой новой технологией<br>
ещё до покупки, получив от<br>
нас бесплатный Биткоин<br>


<br>

<a href= "https://bitcoinsinrussia.com/WeGiftBitcoin.html" target="_blank">Получите бесплатный Биткоин</a><br>
<i>Это очень просто</i><br>

<a>_______</a><br>
<br>
<gk style="color: #BA0054">
Вы можете<br>
анонимно общаться<br>
с нами прямо здесь<br>
<i>Чат внизу справа</i>
<br>
<br>


<a href="https://bitcoinsinrussia.com/" target="_blank"><img src="https://bitcoinsinrussia.com/logo.png" width="100px"></a>


<br>
<br>

<big><big><a href="https://bitcoinsinrussia.com/" style="text-decoration: none; color: #BA0054" target="_blank">Bitcoins in Russia</a></big></big>
<br><br>
7:00 — 18:00 МСК
<br><br>

</gk>

</div>
</small></small></small>
</h1>
</center>


</body>

</html>


