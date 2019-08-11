var potager = document.getElementById('potager');
var manioc = document.getElementById('manioc');
var banane = document.getElementById('banane');
var patate = document.getElementById('patate');
var jacque = document.getElementById('jacque');
var tomate = document.getElementById('tomate');
var logo = document.getElementById('logo');
var logoHolder = document.getElementById('logoHolder');

var titre = document.getElementById('titre');
var image = document.getElementById('mainImageCulture');
var texte = document.getElementById('texte');
var video = document.getElementById('video');
var actu = document.getElementById("actu");
var eco = document.getElementById("eco");
var hist = document.getElementById("hist");
var edu = document.getElementById("edu");
var contact = document.getElementById("contact");
var nav = document.getElementById("navigation");







navigation.addEventListener('mouseover', removeHeader);
navigation.addEventListener('mouseleave', backHeader);
potager.addEventListener('click',togglePotager);
manioc.addEventListener('click',toggleManioc);
banane.addEventListener('click',toggleBanane);
potager.addEventListener('click',togglePotager);
patate.addEventListener('click',togglePatate);
jacque.addEventListener('click',toggleJacque);
tomate.addEventListener('click',toggleTomate);
logo.addEventListener('mouseover',toggleLogo);
logo.addEventListener('mouseleave',toggleBackgroudnImage);

function removeHeader(){
actu.style.opacity = "0";
actu.style.transition = "0.7s";
actu.style.top = "0%";

eco.style.opacity = "0";
eco.style.transition = "0.7s";
eco.style.top = "0%";

hist.style.opacity = "0";
hist.style.transition = "0.7s";
hist.style.top = "0%";

edu.style.opacity = "0";
edu.style.transition = "0.7s";
edu.style.top = "0%";

contact.style.opacity = "0";
contact.style.transition = "0.7s";
contact.style.top = "0%";
}

function backHeader(){
actu.style.opacity = "1";
actu.style.transition = "2s";
actu.style.top = "10%";

eco.style.opacity = "1";
eco.style.transition = "2s";
eco.style.top = "10%";

hist.style.opacity = "1";
hist.style.transition = "2s";
hist.style.top = "10%";

edu.style.opacity = "1";
edu.style.transition = "2s";
edu.style.top = "10%";

contact.style.opacity = "1";
contact.style.transition = "2s";
contact.style.top = "10%";
}



function toggleLogo() {
	logoHolder.style.backgroundImage = "url('images/yl.png')";
	logoHolder.style.backgroundSize = "500px 500px"; 
	logoHolder.style.backgroundRepeat ="no-repeat";
	logoHolder.style.transition ="1s"; 

}
function toggleBackgroudnImage() {
	logoHolder.style.backgroundImage = "url('images/ile-aux-parfums.png')";
	logoHolder.style.backgroundSize = "cover"; 
	logoHolder.style.backgroundRepeat ="no-repeat"; 
	logoHolder.style.transition ="5s"; 

}
function togglePotager() {
	titre.innerHTML="<p>Pour votre santé</p>";
	image.innerHTML="<video controls src='images/videoExploitation.MOV'></video>";
	texte.innerHTML="<p>Notre exploitation se situe dans le sud de l'île de Mayotte dans la commune de Kani Kéli. La superficie est de 1000 héctars, et nous les cultivons en bonne intelligence, en respectant la nature. Nous cultivons plusieurs fruits et légumes que vous pourrez déguster à notre table. Nous y cultivons de la vanille, du manioc, de la banane, des patates douces, des tomates, des mangues, du coco (liste non exhaustive...), ainsi que tout un tas d'autres bonnes choses. <br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr></p> <br /><br /><br /> <br /><br /><br /><br />";
}
function togglePatate() {
	titre.innerHTML="<p>Ayez toujours la Patate!!</p>";
	image.innerHTML='<img src="images/patates.jpg"/>';
	texte.innerHTML="<p>La patate douce est un féculent de la même famille que la pomme de terre. Celle-ci est sucrée par nature. Il en existe des blanches, des orangée, des mauves, etc.. Et elles peuvent être consommées de plusieurs façons différentes. Principalement bouillie, frites, ou plus rarement grilées.<br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr> <br /><br /> Patates douces frites (en lamelles), servies chez nous: <br /> <img src='images/patates_frites1.jpg'/>  <br /><br /> Patates douces frites (en batonnets), servies chez nous: <br /> <img src='images/patates_frite2.jpg' /> <br /><br />Patates douces (en chips), servies chez nous: <br /> <img src='images/patates_chips.jpg'/></p> <br /><br /><br /> <br /><br /><br /><br />";

}
function toggleManioc() {
	titre.innerHTML="<p>Rien ne vaut un bon gros manioc</p>";
	image.innerHTML='<img src="images/manioc.jpg"/>';
	texte.innerHTML="<p>Avec le riz et la banane verte, le manioc arrive dans le top 3 des aliments les plus consommés sur l'île. Sa culture ne nécessite pas d'irrigation autre que celle des pluies occasionnelles toute au long de l'année. Pour cette raison, on plante le manioc pendant la saison de pluie pour donner le plus de chance possible à la plante. Une fois celle ci germée, elle se développe toute seule sans avoir besoin qu'on lui emmène de l'eau ni autre nutriment pour le reste de sa vie, à part ce qu'elle trouve naturellement dans le sol, et l'eau qui lui tombe du ciel.<br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr> <br /><br />Manioc bouillie avec viande grillée (servie chez nous): <br /><img src='images/manioc_plat_viande.jpg' /> <br /><br /> Chips de manioc (salés) servis chez nous: <br /><img src='images/manioc_chips.jpg'/> <br /><br />  Manioc frit (salés) servis chez nous: <br /><img src='images/manioc_frit.jpg'/></p> <br /><br /><br /> <br /><br /><br /><br />";
}

function toggleBanane() {
	titre.innerHTML="<p>C'est important d'avoir la banane</p>";
	image.innerHTML="<video controls src='images/bananes.MOV'></video>";
	texte.innerHTML="<p>La banane est l'un des aliments les plus consommés sur l'île. Avec le manioc et le riz, elle représente pour un tiers l'aliment de base. Il en existe une variété d'espèces sur l'île.. Elle peut être consommée de plusieurs façons différentes. Principalement bouillie, frite, ou plus rarement grilée. Dans ces préparations, elle doit impérativement être verte. Mais cependant il arrive qu'elle soit également préparé mûre, mais seulement en petit déjeûner.<br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr> <br /><br /> Bananes vertes frites (en en batonnets salés), servies chez nous: <br /> <img src='images/frites_de_bananes.jpg'/>  <br /><br /> Bananes frites (en chips salées), servies chez nous: <br /> <img src='images/bananes_chips.jpg' /> <br /><br />Bananes mûres (en chips sucrés), servies chez nous <br /> <img src='images/bananes_murs_frites.jpg'/> <br /><br />Bananes entières frites: <br /><img src='images/bananes_entieres_frites.jpg' /></p> <br /><br /><br /><br /><br /><br /><br />";
}


function toggleJacque() {
	titre.innerHTML="<p>Jacques a dit croyez aux miracles!</p>";
	image.innerHTML='<img src="images/jaquier.jpg"/>';
	texte.innerHTML="<p>Le jaquier est le plus gros fruit à pousser sur un abre. Son poids peut atteindre les 35 Kg et ses propriétés pourraient sauver le monde de la famine. Le fruit est riche en fibres alimentaires, mais également en protéines, calcuim et fer. La valeur nutritive est de 95 Calories pour 100g, et pourrait aisément remplacer le riz, le blé et le maïs, tout bonnement impressionnant! En mangeant une quinzaine de bulbes, on est rassasié pour la moitié de la journée. On peut manger le fruit mur, mais également vert dans différentes préparations. Une fois celui ci cuisiné, la chaire du fruit a un goût qui est proche de celui de la viande. Même les graines peuvent être consommées, soit grillée jetées à même les braises, ou moulues et réduites en farine. L'arbre lui-même donne du latex, de la teinture, et on peut l'utiliser simplement comme combustible pour cuisniner notamment. La meilleur dans tout cela est que l'arbre ne nécessite que très peu d'eau et les quelques pluies annuelles suffisent à son épanouissement. Nul besoin d'irrigation. Pour plus d'infos, consultez l'article du journal anglais <strong>The guardian</strong>, <a target='_blank' href='https://www.theguardian.com/environment/2014/apr/23/jackfruit-miracle-crop-climate-change-food-security'> cliquez ici </a> <br /><br /> <br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr>Bulbes du fruit du jaquier (servie chez nous en barquette de 200g): <br /> <img src='images/jaquier_mur.jpg'/> <br /><br />Jaquier en préparation salée, avec ou sans viande (servi chez nous): <br />  <img src='images/jaquier_cuit.jpg'/> <br/><br/>Jaquier frit en chips (servi chez nous): <br /> <img src='images/jaquier_frit.jpg'/></p> <br /><br /><br /> <br /><br /><br /><br />";
}

function toggleTomate() {
	titre.innerHTML="<p>Des tomates par ci, des tomates par là..</p>";
	image.innerHTML='<img src="images/tomates.jpg"/>';
	texte.innerHTML="<p>Est il besoin encore de présenter certainement le fruit le plus celèbre dans toute bonne cuisine? La tomate est l'incontournable dans bon nombre de préparations. Elle peut aussi bien se manger crue en entrée, en salade, ou enocre dans une viande en sauce il en existe une variété quasi infinie. Ici chez Maywo, nous en cultivons principalement que 3 espèces, peu consommatrice en eau, et très goutues. Vous aurez la chance de les déguster à notre table sous différentes formes.<br /><br /> <span class='video'>Voir la vidéo:</span> <br> <video controls src='images/videoExploitation.MOV'> </video> <hr> <br /><br />Nos tomates sont cultivée en plein air et en pleine terre comme vous pouvez le voir: <br /><img src='images/plant_tomate.jpg'/> <br /><br /> Mangez de la tomate, ça rend aimable et beau: <br /><img src='images/tomate_salade.jpg'/></p> <br /><br /><br /> <br /><br /><br /><br />";
}