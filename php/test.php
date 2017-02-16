<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>

        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo 'Cette phrase est générée par PHP.' ?>
            Voici quelques petits tests :
        </p>

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>

        <?php
           echo 'Cette phrase est aussi générée par PHP.'
        ?>
        <h3>Les variables</h3>
        <?php
          $ageDuVisiteur=10;
          $ageDuVisiteur=35; //variable nombre entiers
          //echo $ageDuVisiteur;
          $prix=25.5; //variable nombre décimal
          $texte="Bonjour!"; //variable texte
          $booleen=true;//variable booléenne
          echo 'Le visiteur a '.$ageDuVisiteur.' ans.';

          $nombre = 10;
          $resultat = ($nombre + 5) * $nombre; // $resultat prend la valeur 150
          echo '<br> le résultat est'.$resultat.' Euros.';
        ?>
        <h3>Les conditions</h3>

        <?php
          $age = 10;

          if ($age <= 12)
          {
              echo "Salut gamin !";
          }else {
            echo "Bonjour adulte !";
          }
        ?>

        <?php
          $langue="français";
          if ($age <= 12 AND $langue == "français")
          {
            echo "<br> Bienvenue sur mon site !";
          }
          elseif ($age <= 12 AND $langue == "anglais")
          {
            echo "<br> Welcome to my website!";
          }
        ?>
      <h3>Les boucles</h3>
      <?php
        $nombre_de_lignes = 1;

        while ($nombre_de_lignes <= 10) //tant que nombre_de_ligne inférieur ou égal à 10
        {
          echo 'j\'apprends le PHP.<br />';
          $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
        }
      ?>





    </body>
</html>
