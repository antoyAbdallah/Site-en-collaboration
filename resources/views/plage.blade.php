@extends('layouts.app')
@extends('layouts.master')
@extends('navLink')
@section('title', 'Mille et une plages de Mayotte')

@section('content')

<h2 style="position: fixed;top: 56px; width: 100%;">Mayotte et ses plages</h2>

  <p class="category_chapeau" style="margin-top: 200px;">
    	Les mahorais sont par nature très proches de la nature, en particulier de la mer. Tant sur le plan culturel, écnonomique que géographique. La quasi totalité des habitations se trouvent à moins de 10 minutes de la mer. La maison de mon père par exemple n'est séparée de la mer que par une mince bande de terre de moins de 2 mètres. Ainsi naturellement, les mahorais ont un rapport très étroit avec les plages de l'île. Ici à Mayotte vous pouvez trouver des plages de sable <a href="#">blanc</a>, de sable <a href="#">noir</a>, des plages de sable <a href="#">ocre</a>, et même <a href="#">grise</a>. Dans quasiment toutes les plages de l'île quel que soit le jour, vous êtes à peu près sur d'y rencontrer les locaux entrain d'y pratiquer ce qui est une véritable institution sur cette île: le <a href="voule">Voulé.</a> 

    	

 
    </p>

<p class="texte">
	Lorsqu'on parle de Mayotte, on ne peut pas échapper aux plages et il y en a sans doute une qui sort du lot et qui nous vient naturellement à l'esprit, je parle bien entendu de l'îlot de sable blanc: j'ai nommé <a href="#">Saziley</a>. Cette plage est en réalité un îlot au large de la pointe de Mtsamboro. Selon la hauteur des marées, sa superficie peut beaucoup varier. Vous aurez l'occasion de la visiter et d'y prendre un apéro avec HelloMayotte !
</p>


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
 <h3>Plage de Ngouja</h3>
 <p class="texte">
  Cette belle plage se situe dans le sud de Mayotte, dans la commune de Kani-Kéli. <br>
  Elle est accessible par une petite route qui vous emmène littéralement jusquau bord de la mer. Cependant vous ne pourrez vous en approcher en voiture uniquement si vous conssommez à l'hotel restaurant qui se situe au niveau de la plage. Elle mesure plusieurs centaines de mètres, et composée de sable blanc. Vous aurez la possibilité en vous rapprochant de l'accueil de l'hotel de faire des sorties nautiques, ou juste louer des canoés pour vous promenez dans le lagon. Cette plage est également un lieu de ponte des tortues vertes de Mayotte, espèce protégée, mais toujours hélas braconnée sur l'île.
 </p>
<div class="imageCOntainer">
<img src="images/ngouja.jpg" alt="ngouja" class="plages">
<img src="images/ngouja2.jpg" alt="ngouja" class="plages">
<img src="images/ngouja3.jpg" alt="ngouja" class="plages">
<img src="images/ngouja4.jpg" alt="ngouja" class="plages">
<img src="images/ngouja5.jpg" alt="ngouja" class="plages">
<img src="images/ngouja6.jpg" alt="ngouja" class="plages">
<img src="images/ngouja7.jpg" alt="ngouja" class="plages">
</div>

 <h3>Mtsanga Mtiti</h3>
 <p class="texte">
  Vous trouvere cette "Petite Plage" à Kani-Bé, dans le sud de Mayotte. Relativement retirée, bien que facilement accessible par la route, vous trouverez ici un endroit calme pour vous relaxer en toute tranquilité. Attention cependant car la marée ici a une grande amplitude. Donc si vous arrivez le matin et posez vos affaire sur la plage alors que la mer est très retirée, dans l'après-midi vous devrez très certainement les déplacer au risque de les voir emportés par les vagues qui peuvent monter jusqu'au niveau des baobas.
 </p>
<div class="imageContainer">
<img src="images/mtsanga_mtiti.jpg" alt="mtsanga_mtiti" class="plages">
<img src="images/mtsanga_mtiti2.jpg" alt="mtsanga_mtiti" class="plages">
<img src="images/mtsanga_mtiti3.jpg" alt="mtsanga_mtiti" class="plages">
<img src="images/mtsanga_mtiti4.jpg" alt="mtsanga_mtiti" class="plages">
<img src="images/mtsanga_mtiti5.jpg" alt="mtsanga_mtiti" class="plages">
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
@endsection