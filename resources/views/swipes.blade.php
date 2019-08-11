<html lang="en">
<head>
  <meta charset="utf-8">
 
<link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" type="text/css" href="engine/style.css" />
        <script type="text/javascript" src="engine/jquery.js"></script>


  <style>

  </style>
</head>
<body>
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide menu">


        <div class="itemAgri">
          
          <h3>Ayez confiance en ce que vous mangez !</h3>
          <br>
          <br>
          <br>
          <hr>
          <a href="about"><img src="images/exploitation.png" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Faisons un petit tour..</h5></a>
          <hr> 

          <a href="#"><img src="images/oranges.jpg" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Oranges..</h5></a>
          <hr> 

          <a href="about"><img src="images/slide 14.png" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Faisons un petit tour..</h5></a>
          <hr> 

          <a href="about"><img src="images/slide 13.png" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Faisons un petit tour..</h5></a>
          <hr> 

          <a href="about"><img src="images/vanille.jpg" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Faisons un petit tour..</h5></a>
          <hr> 

          <a href="about"><img src="images/cultureImage.jpg" alt="l'homme dans son véritable élément"></a>
          <a href="about"><h5>Faisons un petit tour..</h5></a>
          <hr> <hr>  
        </div>
        <br>
  

      </div>
      <div class="swiper-slide content">

        <div class="menu-button" style="">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div> 
       
        <div class="contenu">
        <div class="logTitles" style="color: #fff;">

            @if (Route::has('login'))
                <div style="" class="top-right links">
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}"><span style="color: #fff;">Se connecter</span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <span style="color: #fff;">S'enregistrer</span></a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
          <div class="title m-b-md">
                </div>
    
<div id="wowslider-container1">


  <div class="ws_images" style="background: rgb(255,255,255);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(229,229,229,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=1 ); border-radius: 20px;">


  <ul>
    

        <li style="border-radius: 20px;"><a href="news"><img src="images/abdallah.png" alt="parfum" title="" id="wows1_0"/></a></li>
    <li><a href="economie"><img src="images/abdallah economie.png" alt="environnement" title="" id="wows1_1"/></a></li>
    <li><a href="histoire"><img src="images/abdallah histoire.png" alt="histoire" title="" id="wows1_2"/></a></li>
    <li><a href="education"><img src="images/abdallah education.png" alt="Puisque le savoir est une arme, alors soyons armés!" title="" id="wows1_3"/></a></li>
    <li><a href="contact"><img src="images/abdallah contact.png" alt="contact" title="" id="wows1_4"/></a></li>
  </ul></div>
  
  <script type="text/javascript" src="engine/wowslider.js"></script>
  <script type="text/javascript" src="engine/script.js"></script>
        </div>

      </div>
    </div>


  </div>
<img src="images/coralreef.png" alt="" style="z-index: 999999">
  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var menuButton = document.querySelector('.menu-button');
    var openMenu = function () {
      swiper.slidePrev();
    };
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      initialSlide: 1,
      resistanceRatio: 0,
      slideToClickedSlide: true,
      on: {
        slideChangeTransitionStart: function () {
          var slider = this;
          if (slider.activeIndex === 0) {
            menuButton.classList.add('cross');
            // required because of slideToClickedSlide
            menuButton.removeEventListener('click', openMenu, true);
          } else {
            menuButton.classList.remove('cross');
          }
        }
        , slideChangeTransitionEnd: function () {
          var slider = this;
          if (slider.activeIndex === 1) {
            menuButton.addEventListener('click', openMenu, true);
          }
        },
      }
    });
  </script>