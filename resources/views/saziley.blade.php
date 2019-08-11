
<div class="w3-content wide">

  <img class="mySlides" src="images/sazile-2.jpg">
  <img class="mySlides" src="images/sazile-3.jpg">
  <img class="mySlides" src="images/sazilé.jpg">
  <img class="mySlides" src="images/ilot3.jpg">
   <img class="mySlides" src="images/saziley.jpg">


</div>


<div class="w3-row-padding w3-section scrollmenu">


<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/sazile-2.jpg" onclick="currentDiv(1)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/sazile-3.jpg" onclick="currentDiv(2)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/sazilé.jpg" onclick="currentDiv(3)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/ilot3.jpg" onclick="currentDiv(4)"></a>
<a><img class="demo w3-opacity w3-hover-opacity-off" src="images/saziley.jpg" onclick="currentDiv(5)"></a>

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