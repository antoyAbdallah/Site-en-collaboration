

    <div class="w3-content wide">

  <img class="mySlides" src="images/sazile-2.jpg">
  <img class="mySlides" src="images/sazile-3.jpg">
  <img class="mySlides" src="images/raie.jpg">
  <img class="mySlides" src="images/ilot.jpg">
  <img class="mySlides" src="images/queue-baleine.jpg">
  <img class="mySlides" src="images/baleine-1.jpg">
  <img class="mySlides" src="images/baleine-2.jpg">
  <img class="mySlides" src="images/baleine-3.jpg">
  <img class="mySlides" src="images/baleine.jpg">
  <img class="mySlides" src="images/boeuf.jpg">
  <img class="mySlides" src="images/barge2.jpg">
  <img class="mySlides" src="images/dugong-2.jpg">
  <img class="mySlides" src="images/dugong.jpg">
  <img class="mySlides" src="images/dziani-2.jpg">
  <img class="mySlides" src="images/orc-1.jpg">
  <img class="mySlides" src="images/orc-2.jpg">
  <img class="mySlides" src="images/orc-3.jpg">
  <img class="mySlides" src="images/orc-4.jpg">
  <img class="mySlides" src="images/orc.jpg">
  <img class="mySlides" src="images/passe-en-s-2.jpg">
  <img class="mySlides" src="images/passe-en-s.jpg">
  <img class="mySlides" src="images/plage-jumelle-3.jpg">
  <img class="mySlides" src="images/plage-jumelle-maree-basse.jpg">
  <img class="mySlides" src="images/plage-jumelle.jpg">
  <img class="mySlides" src="images/plage-mangrove.jpg">
  <img class="mySlides" src="images/plongee-2.jpg">
  <img class="mySlides" src="images/plongee.jpg">

</div>


<div class="w3-row-padding w3-section scrollmenu">


<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/sazile-2.jpg" onclick="currentDiv(1)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/sazile-3.jpg" onclick="currentDiv(2)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/raie.jpg" onclick="currentDiv(3)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/ilot.jpg" onclick="currentDiv(4)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/queue-baleine.jpg" onclick="currentDiv(5)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/baleine-1.jpg" onclick="currentDiv(6)"></a>  
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/baleine-2.jpg" onclick="currentDiv(7)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/baleine-3.jpg" onclick="currentDiv(8)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/baleine.jpg" onclick="currentDiv(9)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/boeuf.jpg" onclick="currentDiv(10)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/barge2.jpg" onclick="currentDiv(11)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/dugong-2.jpg" onclick="currentDiv(12)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/dugong.jpg" onclick="currentDiv(13)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/dziani-2.jpg" onclick="currentDiv(14)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/orc-1.jpg" onclick="currentDiv(15)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/orc-2.jpg" onclick="currentDiv(16)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/orc-3.jpg" onclick="currentDiv(17)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/orc-4.jpg" onclick="currentDiv(18)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/orc-1.jpg" onclick="currentDiv(19)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/passe-en-s-2.jpg" onclick="currentDiv(20)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/passe-en-s.jpg" onclick="currentDiv(21)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plage-jumelle-3.jpg" onclick="currentDiv(22)"></a>

<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plage-jumelle-maree-basse.jpg" onclick="currentDiv(23)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plage-jumelle.jpg" onclick="currentDiv(24)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plage-mangrove.jpg" onclick="currentDiv(25)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plongee-2.jpg" onclick="currentDiv(26)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/plongee.jpg" onclick="currentDiv(27)"></a>
<!--<a href="#work">Work</a>
<a href="#work">Work</a>
<a href="#work">Work</a>
<a href="#work">Work</a>
-->
</div>





<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
}

function currentDiv(n) {
showDivs(slideIndex = n);
}

function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length}
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
}
x[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
