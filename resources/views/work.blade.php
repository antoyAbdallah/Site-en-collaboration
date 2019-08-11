@extends('main')
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  

  <title></title>
  <style>
    html{

background: rgb(0,0,0);
}
.bio{
  background-color: rgba(1,28,248,0.5);
  padding: 20px;
  box-sizing: border-box;
  border-radius: 10px;
  border: 5px solid #fff;
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
  opacity: 0.9;
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
    background: #373737;
    list-style: none;
    transform: translate3d(0, -100%, 0);
    transition: all 0.5s ease-out; }
    .menu-nav.show {
      transform: translate3d(0, 0, 0); }
  .menu-branding {
    background: #444;
    transform: translate3d(0, 100%, 0);
    transition: all 0.5s ease-out; }
    .menu-branding.show {
      transform: translate3d(0, 0, 0); }
    .menu-branding .portrait {
      width: 250px;
      height: 250px;
      background: url("images/moi.png");
      border-radius: 50%;
      border: solid 3px #eece1a; }
  .menu .nav-item {
    transform: translate3d(600px, 0, 0);
    transition: all 0.5s ease-out; }
    .menu .nav-item.show {
      transform: translate3d(0, 0, 0); }
    .menu .nav-item.current > a {
      color: #eece1a; }
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
      color: #eece1a; }

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

body {
  
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.5; }
  body#bg-img {
    background-attachment: fixed;
    background-size: cover; }
    body#bg-img:after {
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
  font-weight: 400; }
  h1.lg-heading,
  h2.lg-heading,
  h3.lg-heading {
    font-size: 6rem; }
  h1.sm-heading,
  h2.sm-heading,
  h3.sm-heading {
    margin-bottom: 2rem;
    padding: 0.2rem 1rem;
    background: rgba(73, 73, 73, 0.5); }

a {
  color: #fff;
  text-decoration: none; }

header {
  position: fixed;
  z-index: 2;
  width: 100%; }

.text-secondary {
  color: #eece1a; 
font-size: 24px;}

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


    padding: 0.5rem;
    border-bottom: #eece1a 5px solid; }

.projects {
  display: grid;
  grid-gap: 0.7rem;
  grid-template-columns: repeat(3, 1fr); }
  .projects img {
    width: 100%;
    opacity: 0.3;
    border: 3px #fff solid; }
    .projects img:hover {
      opacity: 1;
      border-color: #00f;
      border-radius: 20px;
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


#main-footer {
  text-align: center;
  padding: 1rem;
  background: #2b2b2b;
  color: #fff;
  height: 60px; }



  </style>
</head>

<body>
  

  <main id="work">
    <h1 class="lg-heading">
      
      <span class="text-secondary">Parfois une image est plus parlante que mille mots</span>
    </h1>
    <!-- <h2 class="sm-heading">
      Je vous propose quelques éléments de réponse sous forme de vidéos pour découvir ma vision des efforts à faire à Mayotte, mais avant ça, rien ne nous empêche de profiter d'une petite visite pour Découvrir un peu le joyau que nous devons protéger et aménager.
    </h2>
-->

    <h2> Voyager </h2>

<hr>
<br>
    <div class="projects">
   



     <div class="item">
     <a href="https://www.youtube.com/watch?v=wRq4_M6rGxg&feature=youtu.be"><img src="images/tortue copie.png" alt=""></video></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Découvrir Mayotte
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>



      
     <div class="item">
     <a href="https://www.youtube.com/watch?v=j4qdivOvKTQ"><img src="images/jetee-barge.jpg" alt="barge"></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Mamoudzou - Barge
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>




       <div class="item">

       <a href="https://www.youtube.com/watch?v=wvLCzK_x0EU"><img src="images/dziani.jpg" alt="Dziani"></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Lac Dziani
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>




         <div class="item">
      <a href="https://www.youtube.com/watch?v=XMFrMFoQ318&feature=youtu.be"><img src="images/mtsangamtiti.jpg" alt=""></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Mtsanga Mtiti
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>



        <div class="item">
      <a href="https://www.youtube.com/watch?v=kWZnhjJYKO8&feature=youtu.be"><img src="images/ngouja.jpg" alt=""></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Ngouja, Le Jardin Mahorais
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>

        <div class="item">
      <a href="#"><img src="images/pointdevungouja.jpg" alt=""></a>
        <a href="blog.env.html">
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Point de vue Ngouja
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>

        <div class="item">
      <a href="https://www.youtube.com/watch?v=LlfUNivbKQM&feature=youtu.be"><img src="images/kbfdm.jpg" alt=""></a>
          
        </a>
        <a href="blog.env.html" class="btn-light">
          <i class="fas fa-eye"></i> Kani Bé, Mon village
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Voir Plus
        </a>
      </div>

    
       


    </div>
  </main>

  <footer id="main-footer">
    Kanimaywo &copy; 2019
  </footer>

  <script src="js/main.js"></script>
</body>

</html>