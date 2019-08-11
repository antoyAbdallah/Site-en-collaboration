@extends('/layouts/master')
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <style>
      .nav-item a{
        float: left;
      }
      .nav-link{
        color: #000;
      }

      a.navbar img{
        
      }
    </style>

  </head>
  <body>

	
	<nav style="position: fixed;top: 0px;left: 0; z-index: 1;width: 100%; height: 68px; padding-top: 0;background-color: #f00;" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img style="height: 85%; width: auto;" src="images/kanimaywob.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/news">Bonjour Mayotte<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="economie">Tout un trésor</a>
        <a class="nav-link" href="histoire">Histoire Mahoraise</a>
        <a class="nav-link" href="education">S'éveiller</a>
        <a class="nav-link" href="contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a style="color: orange;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Découvrez
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <ul>
            
             <a href="economie"><li class="dropdown-item">Mayotte</li></a>
              <a href="about"><li class="dropdown-item">Agriculture<li></a>
                <a href="a_table"><li class="dropdown-item">Passons à Table<li></a>
              <a href="a_table"><li class="dropdown-item">Passons à Table</li></a>
          </ul>
      <!--
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
<!--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Que cherchez-vous ?" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form> -->
  </div>
</nav>

		<div class="container">
			
			@yield('content') 
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  
  </body>
</html>