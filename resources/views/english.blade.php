@extends('layouts.app')
@section('title','Apprendre')
  @extends('navLink')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="index.css">
	
	
</head>
<body>
<img src="images/economie.jpg" alt="">
<div class="container" style="margin-top: 100px;"></div>
<h2 style="">Puisque le savoir est une arme, alors soyons armés ! </h2>
<h4>Apprenez l'anglais à votre rythme</h4>

  <p class="category_chapeau">
    	Demain se prépare aujourd'hui. Nous sommes aujourd'hui plus que jamais inscrits dans la modernisation, notamment avec notre reconnaissance pleine et entière comme faisant partie intégrante de la France. Il nous faut développer notre Français puisque nous sommes français. Je pense en particulier à nos ainés qui n'ont pour beaucoup pas été scolarisés. Le taux d'alphabétisation des adultes à Mayotte est le plus faible de France, et donc d'Europe. Nous avons ainsi l'ambition de donner des leçons de français ouverts à tous, afin de donner les clés pour mieux apréhender le nouveau monde qui se déploie sur notre sol, afin de ne pas en être des spéctateurs impuissants. Et pour le publique n'ayant pas de probleme d'alphabétisation, nous donnons également des cours d'anglais tout niveau, avec une emphase mise pour le niveau collège. Maintenant que nous sommes des francais à part entière, nous avons le devoir de maitriser la langue francaise, à l'écrit comme à l'oral. Et pour ceux qui ont déja une bonne maitrise du francais, et qui souhaitent aller plus loin, venez apprendre l'anglais avec nous. Il est indispensable de developper l'apprentissage de ces deux langues dès le plus jeune âge, et ce dans le but de preparer la génération qui monte afin qu'elle ne manque pas le coche lorsqu'il s'agira d'integrer notre île dans la modernité qui s'annonce pour l'instant comme un orage, dont il s'agit maintenant de nous préparer pour ne pas nous retrouver les pieds dans l'eau.
    </p>

	<table class="table table-striped">
        <thead>
           
            
        </thead>
        <tbody>
			
			 <tr>
	           	<td> <img style="width: 300px;" src="images/english.jpg" alt=""></td>
	            <td style="font-size: 1.7em;">Compter de 0 à 100 en anglais</td>
	            <td>
	                <a href="/post/show/1" class="btn btn-primary">Voir +</a>
	            </td>
       		</tr>

       		 <tr>
	           	<td> <img style="width: 300px;height: auto;" src="images/what-time-is-it.jpg" alt=""></td>
	            <td style="font-size: 1.7em;">What time is it?</td>
	            <td>
	                <a href="/post/show/9" class="btn btn-primary">Voir +</a>
	            </td>
       		</tr>

        	 <tr>
           <td> <img style="width: 300px;" src="images/introduction.jpg" alt=""></td>
            <td style="font-size: 1.7em;">Se présenter</td>
            <td>
                <a href="/post/show/7" class="btn btn-primary">Voir +</a>
            </td>
        </tr>

        <td> <img style="width: 300px;" src="images/dziani.jpg" alt=""></td>
            <td style="font-size: 1.7em;">Lac Dziani | Pamandzi</td>
            <td>
                <a href="/post/show/10" class="btn btn-primary">Voir +</a>
            </td>
        </tr>


       

        <tr>
           <a href="youtube.com"><td> <img style="width: 300px;" src="images/pointdevungouja.jpg" alt=""></td></a>
            <td style="font-size: 1.7em;"> Point de Vu Ngouja</td>
            <td>
                <a href="/post/show/2" class="btn btn-primary">Voir +</a>
            </td>
        </tr>

        <tr>
           <td> <img style="width: 300px;" src="images/kbfdm.jpg" alt=""></td>
            <td style="font-size: 1.7em;">Kani-Bé | Chez moi</td>
            <td>
                <a href="/post/show/1" class="btn btn-primary">Voir +</a>
            </td>
        </tr>

         <tr>
           <td> <img style="width: 300px;" src="images/sortieMer.jpg" alt=""></td>
            <td style="font-size: 1.7em;">Sortie lagon | Mayotte</td>
            <td>
                <a href="/post/show/1" class="btn btn-primary">Voir +</a>
            </td>
        </tr>
        </tbody>

    </table>

  
@endsection
	
</body>
</html>