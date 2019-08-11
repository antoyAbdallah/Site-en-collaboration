<!DOCTYPE html>
<html lang="fr">
<style>
	html{
box-sizing: border-box;
background: rgb(206,220,231);
background: -moz-radial-gradient(center, ellipse cover, rgba(206,220,231,1) 0%, rgba(89,106,114,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%);
background: radial-gradient(ellipse at center, rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=1 );
}

#monId{
position: fixed;
top: 20vh;
height: 110px;
z-index: 9999;
text-align: center;
width: 100%;
background-color: rgba(255,255,255,0.6);
border-top: 2px solid #000;
border-bottom: 2px solid #000;
}
h2{
text-align: center;
color: #fff;
text-shadow: 1px 1px  #000;
}
.bthome{
position: fixed;
top: 10px;
left: 43%;
height: 60px;
font-size: 1.2em;
border-radius: 10px;
box-sizing: border-box;
z-index: 999999;
background-color: #fff;


}

.bthome:hover{
position: fixed;
background-color: #f48e5c;
color: #fff;
cursor: pointer;
left: 43%;
height: 60px;
font-size: 1.2em;
border-radius: 10px;
border: 2px solid white;
box-sizing: border-box;


}

nav img{
position: fixed;
left: 0;
top: 0;
height: 100%;
width: auto;
}

.important{
color: #fff;
}
#chapeau{
color: #000;
text-shadow: 1px 1px  #fff;
font-size: 1.6em;
background-color: rgba(255,255,255,0.7);
padding: 15px;
box-sizing: border-box;
border-top: 4px solid #000;
border-bottom: 4px solid #000;
}
.bio{
background: rgba(96,108,136,0.5);
background: -moz-radial-gradient(center, ellipse cover, rgba(96,108,136,0.7) 0%, rgba(63,76,107,0.7) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(96,108,136,0.7) 0%,rgba(63,76,107,0.7) 100%);
background: radial-gradient(ellipse at center, rgba(96,108,136,0.7) 0%,rgba(63,76,107,0.7) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#3f4c6b',GradientType=1 );

padding: 20px;
box-sizing: border-box;
border-radius: 10px;
border: 5px solid #fff;
}
#moi{
position: fixed;
left: 0;
top: 0;
height: 100%;
width: auto;
z-index: -1;
}
.menu-btn {
position: absolute;
z-index: 3;
right: 35px;
top: 35px;
cursor: pointer;
transition: all 0.5s ease-out; }
.menu-btn .btn-line {
width: 28px;
height: 3px;
margin: 0 0 5px 0;
background: #fff;
transition: all 0.5s ease-out; }
.menu-btn.close {
transform: rotate(180deg); }
.menu-btn.close .btn-line:nth-child(1) {
transform: rotate(45deg) translate(5px, 5px); }
.menu-btn.close .btn-line:nth-child(2) {
opacity: 0; }
.menu-btn.close .btn-line:nth-child(3) {
transform: rotate(-45deg) translate(7px, -6px); }

.menu {
position: fixed;
top: 0;
width: 100%;
background-color: #f79803;
opacity: 0.95;
visibility: hidden; }
.menu.show {
visibility: visible; }
.menu-branding, .menu-nav {
display: flex;
flex-flow: column wrap;
align-items: center;
justify-content: center;
float: left;
width: 50%;
height: 100vh;
overflow: hidden; }
.menu-nav {
margin: 0;
padding: 0;
list-style: none;
transform: translate3d(0, -100%, 0);
transition: all 0.5s ease-out; }
.menu-nav.show {
transform: translate3d(0, 0, 0); }
.menu-branding {
background: #03aff7;
transform: translate3d(0, 100%, 0);
transition: all 0.5s ease-out; }
.menu-branding.show {
transform: translate3d(0, 0, 0); }
.menu-branding .portrait {
width: 250px;
height: 250px;
border-radius: 50%;
border: solid 3px #eece1a; }
.menu .nav-item {
transform: translate3d(600px, 0, 0);
transition: all 0.5s ease-out; }
.menu .nav-item.show {
transform: translate3d(0, 0, 0); }
.menu .nav-item.current > a {
color: #000; }
.menu .nav-link {
display: inline-block;
position: relative;
font-size: 30px;
text-transform: uppercase;
padding: 1rem 0;
font-weight: 300;
color: #fff;
text-decoration: none;
transition: all 0.5s ease-out; }
.menu .nav-link:hover {
color: #000; }

.nav-item:nth-child(1) {
transition-delay: 0.1s; }

.nav-item:nth-child(2) {
transition-delay: 0.2s; }

.nav-item:nth-child(3) {
transition-delay: 0.3s; }

.nav-item:nth-child(4) {
transition-delay: 0.4s; }

* {
box-sizing: border-box; }
.illustrative{
width: 100%;
height: auto;
}
body {

line-height: 1.5; }
body#bg-img {
background-attachment: fixed;
background-size: cover;
margin: 0; }
body#bg-img:after {
margin: 0;
content: '';
position: absolute;
top: 0;
right: 0;
width: 100%;
height: 100%;
z-index: -1;
background: rgba(68, 68, 68, 0.9); }

h1,
h2,
h3 {
margin: 0;
text-align: center;
font-weight: 400; 
}
h1.lg-heading,
h2.lg-heading,
h3.lg-heading {
font-size: 3rem; }
h1.sm-heading,
h2.sm-heading,
h3.sm-heading {
margin-bottom: 2rem;
padding: 0.2rem 1rem;
background:#000;
color: #fff;
padding: 5px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 2px solid #fff;
text-align: center;
}

a {
color: #fff;
text-decoration: none; }

header {
position: fixed;
z-index: 99999;
width: 100%; }

.text-secondary {
color: #02e2f6;
text-shadow: 1px 1px #000; }

main {
padding: 4rem;
min-height: calc(100vh - 60px); }
main .icons {
margin-top: 1rem; }
main .icons a {
padding: 0.4rem; }
main .icons a:hover {
color: #eece1a;
transition: all 0.5s ease-out; }
main#home {
overflow: hidden; }
main#home h1 {
margin-top: 20vh; }

.about-info {
display: grid;
grid-gap: 30px;
grid-template-areas: 'bioimage bio bio' 'job1 job2 job3';
grid-template-columns: repeat(3, 1fr); }
.about-info .bio-image {
grid-area: bioimage;
margin: auto;
border-radius: 50%;
border: #eece1a 3px solid; }
.about-info .bio {
grid-area: bio;
font-size: 1.5rem; }


.about-info .job-1 {
border-radius: 10px;
border: 3px solid #00f;
background: rgba(255,255,255,0.7);
color: #000;
text-align: justify;
grid-area: job1;
transition: .5s; }

.job-1:hover{
border: 3px solid orange;
transition: .5s;
background: rgb(73,155,234);
background: -moz-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%,rgba(32,124,229,1) 100%);
background: radial-gradient(ellipse at center, rgba(73,155,234,1) 0%,rgba(32,124,229,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=1 );
}


.about-info .job-2 {
border-radius: 10px;
border: 3px solid #fff;
background: rgba(255,255,255,0.7);
grid-area: job2;
transition: .5s; 
text-align: justify;}

.job-2:hover{
border: 3px solid orange;
transition: .5s;
color: #000;
background: rgb(238,238,238);
background: -moz-radial-gradient(center, ellipse cover, rgba(238,238,238,1) 0%, rgba(238,238,238,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%);
background: radial-gradient(ellipse at center, rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#eeeeee',GradientType=1 );
}


.about-info .job-3 {
border-radius: 10px;
border: 3px solid #f00;
background: rgba(255,255,255,0.7);
color: #000;
text-align: justify; 
grid-area: job3;
transition: .5s; 
text-align: justify;}

.job-3:hover{
border: 3px solid orange;
background: rgb(255,26,0);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,26,0,1) 0%, rgba(255,26,0,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,26,0,1) 0%,rgba(255,26,0,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,26,0,1) 0%,rgba(255,26,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff1a00', endColorstr='#ff1a00',GradientType=1 );transition: .5s;
color: #000;

}
h4{
text-align: center;
}
.about-info .job {

padding: 0.5rem;
border-bottom: #eece1a 5px solid; }

.projects {
display: grid;
grid-gap: 0.7rem;
grid-template-columns: repeat(3, 1fr);
}


.projects img {
width: 100%;
opacity: 0.8;
border: 5px #f69102 solid; }
.projects img:hover {
opacity: 1;
border:5px solid #fff;
box-sizing: border-box;
transition: all 0.5s ease-out; }

.boxes {
display: flex;
flex-wrap: wrap;
justify-content: space-evenly;
align-items: center;
margin-top: 1rem; }
.boxes div {
font-size: 2rem;
border: 3px #fff solid;
padding: 1.5rem 2.5rem;
margin-bottom: 3rem;
transition: all 0.5s ease-out; }
.boxes div:hover {
padding: 0.5rem 1.5rem;
background: #eece1a;
color: #000; }
.boxes div:hover span {
color: #000; }

.btn, .btn-dark, .btn-light {
display: block;
padding: 0.5rem 1rem;
border: 0;
margin-bottom: 0.3rem; }
.btn:hover, .btn-dark:hover, .btn-light:hover {
background: #eece1a;
color: #000; }

.btn-dark {
background: black;
color: #fff; }

.btn-light {
background: #c4c4c4;
color: #333; }

#main-footer {
text-align: center;
padding: 1rem;
background: #2b2b2b;
color: #fff;
height: 60px; }

@media screen and (min-width: 1171px) {
.projects {
grid-template-columns: repeat(4, 1fr); } }

@media screen and (min-width: 769px) and (max-width: 1170px) {
.projects {
grid-template-columns: repeat(3, 1fr); } }

@media screen and (max-width: 768px) {
main {
align-items: center;
text-align: center; }
main .lg-heading {
line-height: 1;
margin-bottom: 1rem; }
ul.menu-nav,
div.menu-branding {
float: none;
width: 100%;
min-height: 0; }
ul.menu-nav.show,
div.menu-branding.show {
transform: translate3d(0, 0, 0); }
.menu-nav {
height: 75vh;
transform: translate3d(-100%, 0, 0);
font-size: 24px; }
.menu-branding {
height: 25vh;
transform: translate3d(100%, 0, 0); }
.menu-branding .portrait {
width: 150px;
height: 150px; }
.about-info {
grid-template-areas: 'bioimage' 'bio' 'job1' 'job2' 'job3';
grid-template-columns: 1fr; }
.projects {
grid-template-columns: repeat(2, 1fr); } }

@media screen and (max-width: 500px) {
main#home h1 {
margin-top: 10vh; }
.projects {
grid-template-columns: 1fr; } }
</style>

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="/sass/main.css">
  <title>Bienvenus dans mon univers</title>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body id="bg-img">
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <img src="images/moibis.png" alt="moi">
      </div>
      <ul class="menu-nav">
          <li class="nav-item current">
          <a href="iindex.html" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.html" class="nav-link">
            Une vision..
          </a>
        </li>
        <li class="nav-item">
          <a href="work.html" class="nav-link">
            Mon travail
          </a>
        </li>
        <li class="nav-item">
          <a href="contact.html" class="nav-link">
            Me contacter
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <h1 id="monId"><span style="">Abdallah</span> <span style="color: #026ff6; text-shadow: 1px 1px #000;">ANTOY</span> <br> <span style="font-size: 0.6em;">Agriculteur, Restaurateur, Président de l'association Ylang École & Entrepreneur</span></h1>	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/exploitation.jpg" alt="exploitation" title="exploitation" id="wows0_0"/></li>
		<li><img src="data0/images/traversee3.jpg" alt="traversee-3" title="traversee-3" id="wows0_1"/></li>
		<li><img src="data0/images/plageocre.jpg" alt="plage-ocre" title="plage-ocre" id="wows0_2"/></li>
		<li><img src="data0/images/plagebaobab.jpg" alt="plage-baobab" title="plage-baobab" id="wows0_3"/></li>
		<li><img src="data0/images/kanibepointdevue.jpg" alt="kanibe-point-de-vue" title="kanibe-point-de-vue" id="wows0_4"/></li>
		<li><img src="data0/images/ilot2.jpg" alt="ilot-2" title="ilot-2" id="wows0_5"/></li>
		<li><img src="data0/images/ilot.jpg" alt="ilot" title="ilot" id="wows0_6"/></li>
		<li><img src="data0/images/mayottemaki.png" alt="mayotte-maki" title="mayotte-maki" id="wows0_7"/></li>
		<li><img src="data0/images/salouva.jpg" alt="salouva" title="salouva" id="wows0_8"/></li>
		<li><img src="data0/images/ngouja.jpg" alt="ngouja" title="ngouja" id="wows0_9"/></li>
		<li><img src="data0/images/pdvngouja.jpg" alt="pdvngouja" title="pdvngouja" id="wows0_10"/></li>
		<li><img src="data0/images/maki.jpg" alt="maki" title="maki" id="wows0_11"/></li>
		<li><img src="data0/images/mayotteparfum.jpg" alt="mayotte-parfum" title="mayotte-parfum" id="wows0_12"/></li>
		<li><img src="data0/images/sazile3.jpg" alt="sazile-3" title="sazile-3" id="wows0_13"/></li>
		<li><img src="data0/images/sazile2.jpg" alt="sazile-2" title="sazile-2" id="wows0_14"/></li>
		<li><img src="data0/images/sazile.jpg" alt="sazile" title="sazile" id="wows0_15"/></li>
		<li><img src="data0/images/oranges.jpg" alt="oranges" title="oranges" id="wows0_16"/></li>
		<li><img src="data0/images/boeuf.jpg" alt="boeuf" title="boeuf" id="wows0_17"/></li>
		<li><img src="data0/images/plagejumelle2.jpg" alt="plage-jumelle-2" title="plage-jumelle-2" id="wows0_18"/></li>
		<li><img src="data0/images/plagejumelle.jpg" alt="plage-jumelle" title="plage-jumelle" id="wows0_19"/></li>
		<li><img src="data0/images/plagengouja.jpg" alt="plage-ngouja" title="plage-ngouja" id="wows0_20"/></li>
		<li><img src="data0/images/barge.jpg" alt="barge" title="barge" id="wows0_21"/></li>
		<li><img src="data0/images/traversee2.jpg" alt="traversee-2" title="traversee-2" id="wows0_22"/></li>
		<li><img src="data0/images/passeens2.jpg" alt="passe-en-s-2" title="passe-en-s-2" id="wows0_23"/></li>
		<li><img src="data0/images/passeens.jpg" alt="passe-en-s" title="passe-en-s" id="wows0_24"/></li>
		<li><img src="data0/images/plageprefet.jpg" alt="plage-prefet" title="plage-prefet" id="wows0_25"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/plage_ocre.jpg" alt="slider html" title="plage ocre" id="wows0_26"/></a></li>
		<li><img src="data0/images/kbfdm.jpg" alt="kbfdm" title="kbfdm" id="wows0_27"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="exploitation"><span><img src="data0/tooltips/exploitation.jpg" alt="exploitation"/>1</span></a>
		<a href="#" title="traversee-3"><span><img src="data0/tooltips/traversee3.jpg" alt="traversee-3"/>2</span></a>
		<a href="#" title="plage-ocre"><span><img src="data0/tooltips/plageocre.jpg" alt="plage-ocre"/>3</span></a>
		<a href="#" title="plage-baobab"><span><img src="data0/tooltips/plagebaobab.jpg" alt="plage-baobab"/>4</span></a>
		<a href="#" title="kanibe-point-de-vue"><span><img src="data0/tooltips/kanibepointdevue.jpg" alt="kanibe-point-de-vue"/>5</span></a>
		<a href="#" title="ilot-2"><span><img src="data0/tooltips/ilot2.jpg" alt="ilot-2"/>6</span></a>
		<a href="#" title="ilot"><span><img src="data0/tooltips/ilot.jpg" alt="ilot"/>7</span></a>
		<a href="#" title="mayotte-maki"><span><img src="data0/tooltips/mayottemaki.png" alt="mayotte-maki"/>8</span></a>
		<a href="#" title="salouva"><span><img src="data0/tooltips/salouva.jpg" alt="salouva"/>9</span></a>
		<a href="#" title="ngouja"><span><img src="data0/tooltips/ngouja.jpg" alt="ngouja"/>10</span></a>
		<a href="#" title="pdvngouja"><span><img src="data0/tooltips/pdvngouja.jpg" alt="pdvngouja"/>11</span></a>
		<a href="#" title="maki"><span><img src="data0/tooltips/maki.jpg" alt="maki"/>12</span></a>
		<a href="#" title="mayotte-parfum"><span><img src="data0/tooltips/mayotteparfum.jpg" alt="mayotte-parfum"/>13</span></a>
		<a href="#" title="sazile-3"><span><img src="data0/tooltips/sazile3.jpg" alt="sazile-3"/>14</span></a>
		<a href="#" title="sazile-2"><span><img src="data0/tooltips/sazile2.jpg" alt="sazile-2"/>15</span></a>
		<a href="#" title="sazile"><span><img src="data0/tooltips/sazile.jpg" alt="sazile"/>16</span></a>
		<a href="#" title="oranges"><span><img src="data0/tooltips/oranges.jpg" alt="oranges"/>17</span></a>
		<a href="#" title="boeuf"><span><img src="data0/tooltips/boeuf.jpg" alt="boeuf"/>18</span></a>
		<a href="#" title="plage-jumelle-2"><span><img src="data0/tooltips/plagejumelle2.jpg" alt="plage-jumelle-2"/>19</span></a>
		<a href="#" title="plage-jumelle"><span><img src="data0/tooltips/plagejumelle.jpg" alt="plage-jumelle"/>20</span></a>
		<a href="#" title="plage-ngouja"><span><img src="data0/tooltips/plagengouja.jpg" alt="plage-ngouja"/>21</span></a>
		<a href="#" title="barge"><span><img src="data0/tooltips/barge.jpg" alt="barge"/>22</span></a>
		<a href="#" title="traversee-2"><span><img src="data0/tooltips/traversee2.jpg" alt="traversee-2"/>23</span></a>
		<a href="#" title="passe-en-s-2"><span><img src="data0/tooltips/passeens2.jpg" alt="passe-en-s-2"/>24</span></a>
		<a href="#" title="passe-en-s"><span><img src="data0/tooltips/passeens.jpg" alt="passe-en-s"/>25</span></a>
		<a href="#" title="plage-prefet"><span><img src="data0/tooltips/plageprefet.jpg" alt="plage-prefet"/>26</span></a>
		<a href="#" title="plage ocre"><span><img src="data0/tooltips/plage_ocre.jpg" alt="plage ocre"/>27</span></a>
		<a href="#" title="kbfdm"><span><img src="data0/tooltips/kbfdm.jpg" alt="kbfdm"/>28</span></a>
	</div></div><div class="ws_script" style="position:fixed;left:-99%"><a href="http://wowslider.net">bootstrap carousel example</a> by WOWSlider.com v8.8m</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	



  <script">
  	// Select DOM Items
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');
const navItems = document.querySelectorAll('.nav-item');

// Set Initial State Of Menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    menuBtn.classList.add('close');
    menu.classList.add('show');
    menuNav.classList.add('show');
    menuBranding.classList.add('show');
    navItems.forEach(item => item.classList.add('show'));

    // Set Menu State
    showMenu = true;
  } else {
    menuBtn.classList.remove('close');
    menu.classList.remove('show');
    menuNav.classList.remove('show');
    menuBranding.classList.remove('show');
    navItems.forEach(item => item.classList.remove('show'));

    // Set Menu State
    showMenu = false;
  }
}
  </script>
</body>

</html>