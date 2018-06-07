<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"GretzerJerome"<gretzerjerome@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

		mail("gretzerjerome@gmail.com", "CONTACT - Blabla", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CV from alstom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
</head>
<body>
    <section id="screen1" class="screen1 container">
        <h2>
        <div class="content">
          <div class="random">
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
               <span class="nbr ltr">0</span>
          </div>
     </div>

     <script type="text/javascript">

     $(document).ready(function() {

     var $randomnbr = $('.nbr');
     var $timer = 30;
     var $it;
     var $data = 0;
     var index;
     var change;
     var letters = ["B", "o", "n", "j", "o", "u", "r"];

     $randomnbr.each(function() {

     change = Math.round(Math.random()*100);
     $(this).attr('data-change', change);

     });

     function random() {
          return Math.round(Math.random()*9);
     };

     function select() {
          return Math.round(Math.random()*$randomnbr.length+1);
     };

     function value() {
          $('.nbr:nth-child('+select()+')').html(''+random()+'');
          $('.nbr:nth-child('+select()+')').attr('data-number', $data);
          $data++;

          $randomnbr.each(function() {
               if(parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
                    index = $('.ltr').index(this);
                    $(this).html(letters[index]);
                    $(this).removeClass('nbr');
               }
          });
     };

     $it = setInterval(value, $timer);

     });

     </script>
          </h2>
          <h3>
          </br>
          Mon nom est Jérôme  
          </br>
          Je suis développeur Web Chez Becode
          </h3>
          <button class="votre_bouton3">
          <a href="#screen2" class="button" scrollamount="1" scrolldelay="50">Je suis à la recherche d'un stage</a>
         </button>
    </section>
      <p style="height:250px; font-size:18px;"></p>

		<section id="screen2" class="screen2 container">
        <div class="espace"><br></div>


        <div id="presentationsection2" class="presentationsection2"><u>Je me présente à vous pour un stage pour les raisons suivantes :</u></div>
        
        <p>- J'aime vos projets</p>
          
        <p>- Je partage les mêmes passions que vous</p>
          
        <p>- j'ai besoin de prendre de l'expérience </p>
        
        <p>- je veux pouvoir utiliser vos technologies et celles que j'ai appris 
          de manière professionnelle</p>
          
        <div id="citationdrole" class="citationdrole"><i>(comme tout développeur, selon scott adams, je pense ne pas encore avoir fait assez de choses mais 
        je vais m'arrêter là)</i></div>


        <button class="votre_bouton3">
            <a href="#screen3" class="button">Mes compétences</a>
            </button>

    </section>
        <p style="height:250px; font-size:18px;"></p>

    <section id="screen3" class="screen3 container">

            <p style="height:30px; font-size:18px;"></p>


        <h2><u><center>Mes compétences</center></u></h2>

        <u><center>j'utilise les langages suivants :</center></u>
        <p style="height:70px; font-size:18px;"></p>
        <table>

              <tr>
              <td>
                <img src="asset/html.png" alt="html" width="200" height="200">
              </td>
              <td>
                <img src="asset/csslogo.png" alt="css" width="150" height="200">
              </td>
              <td>
                <img src="asset/phplogo.png" alt="php" width="150" height="200">
              </td>
              <td>
                  <img src="asset/javascriptlogo.png" alt="php" width="200" height="200">

              </td>
        </table>
        <p style="height:40px; font-size:18px;"></p>


      <button class="votre_bouton3">
          <a href="#screen4" class="button">Pourquoi me choisir ?</a>
          </button>


    <section id="screen4" class="screen4 container">
          <div class="espace2"><br></div>

         <div id="presentationsection2" class="presentationsection2"><u>Pourquoi me choisir comme stagiaire ?</u></div>
    
          <p>- je suis motivé et fiable</p>

          <p>- Je veux apprendre de nouvelles choses</p>

          <p>Ne viens de finir ma formation et j'ai hâte d'utiliser mes nouvelles connaissances dans un milieu professionnelle</p>

          <div id="citationdrole" class="citationdrole"><i>(Par contre, je ne sais pas changer une ampoule... c'est un problème Hardware)</i></div>

          <button class="votre_bouton3">
            <a href="#screen5" class="button">Contactez moi</a>
          </button>

    </section>

    <section id="screen5" class="screen 5 container">

          <p style="height:130px; font-size:18px;"></p>

          <h3><u>Contact</u></h3>
          <form method="POST" action="">
            <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
            <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
            <textarea name="message" placeholder="Votre message" rows="25" cols="110"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
            <input type="submit" value="Envoyer !" name="mailform"/>
          </form>
          <?php
          if(isset($msg))
          {
            echo $msg;
          }
          ?>

        
    </section>

    <div id="peekaboo">

        <a href="https://www.facebook.com/minato.shikinami"><img src="asset/facebook-icon-100x100.jpg" alt="facebook" style="border:none"></a>
        <a href="https://github.com/gretzerjerome"><img src="asset/github-filled.png" alt="facebook" style="border:none"></a>
        <a href="https://www.linkedin.com/in/j%C3%A9r%C3%B4me-gretzer-011b60157/"><img src="asset/linkedin-icon-25.png" alt="facebook" style="border:none"></a>
        <a href="https://www.gretzerjerome.serol.be/"><img src="asset/index.jpeg" alt="facebook" style="border:none"></a>


      </div>

    
</body>
</html>