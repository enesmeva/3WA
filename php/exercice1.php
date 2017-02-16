<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercices PHP</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Exercice 1 : Les variables
    Créer 5 variables en PHP avec:
    + Adresse
    + Code Postal (int)
    + Ville
    + Pays
    + Langues
    + Position GPS (Longitude et Latitude) => Tableaux

    Afficher l'ensemble des informations avec des "echo" dans un Panel Boostrapp
    BONUS: Si la ville est "Lyon" , alors afficher une image de l'OL
  **************************************************************************-->
  <?php
    $adresse="39 rue parmentier";
    $codePostal=69190;
    $ville="Istanbul";
    $pays="France";
    $langues="français";
    $positionGps="45° 42′ 34″ nord, 4° 51′ 14″ est";
    $imgLyon='<img style="width:30%;" src="http://www.cuisine-turque.com/wp-content/uploads/2015/02/CAY-600x400.jpg"';
    ?>

    <div class="panel panel-success col-md-8">
      <div class="panel-heading">
        <h3 class="panel-title">Exercice 1 Les variables</h3>
      </div>
      <div class="panel-body">
        <p>Adresse: <?php echo $adresse; ?></p>
        <p>Code Postal: <?php echo $codePostal; ?></p>
        <p>Ville: <?php echo $ville; ?></p>
        <?php if ($ville == "Istanbul") {
          echo 'Image Istanbul :'.$imgLyon;
        } ?>
        <br>
        <p>Pays : <?php echo $pays; ?></p>
        <p>Langues : <?php echo $langues; ?></p>
        <p>Positions GPS : <?php echo $positionGps; ?></p>
      </div>
    </div>
<!--*******************************************************************-->
<!--Exercice 2: Les Tableaux
* Exercice a reéaliser avec Boostrap

Créer un tableaux de 10 ingrédients de cuisine
Affiche l'ensemble des ingrédients dans des Ul Nav de Boostrap
Si l'ingrédient est "Chocolat" ajouter dans l'affichage (A consommer avec modération)-->
  <div class="panel panel-success col-md-8">
    <div class="panel-heading">
      <h3 class="panel-title">Exercice 2: Les Tableaux</h3>
    </div>
    <?php
      $cuisine = ["sucre","noisettes","farine","miel","pistache","citron","oeuf","lait","beurre","chocolat"];
      echo "<pre>";
      print_r($cuisine);
      echo "</pre>";
    ?>
    <ul class="nav nav-pills nav-stacked">
      <?php
        $compteur = 0;
        while ($compteur < 10) { ?>
          <li role="presentation" class="active"> <?php echo $cuisine[$compteur]; ?></li>
          <?php
            if ($cuisine[$compteur]=="chocolat") {
              echo "<p> (A consommer avec modération) </p>";
            }
            $compteur++;
        } ?>
    </ul>
  </div>
  <!--**********************************************************************-->
<!-- * Exercice 3: Les Tableaux Associatifs
* Exercice a reéaliser avec Boostrap

Créer un tableau contenant 5 articles avec pour chaque article
 + Un titre
 + Un résumé
 + Une description (avec balses HTML)
 + Un nom de catégorie
 + Un note sur 20
 + Une image (url vers image)
 + Un tableau tags pour chaque article
 + Un tableau qui regroupe les informations de l'auteur : son nom, prenom et email pour chaque article
 + Un tableau qui regroupe 4 urls de videos pour chaque article
+ Afficher l'ensemble des informations avec des boucles
+ Afficher les articles qui ont une note > 15 dans un background success
+ Afficher les articles qui ont une note > 10 et < 15 en background infos
+ Afficher les articles qui ont une note > 8 et < 10 en background warning
+ Afficher les articles qui ont une note < 8  en background danger-->
<?php
    $article1  = array(
      'titre' => 'Kaybedenler kulübü',
      'resume' => 'Bir Nejat Isler filmi',
      'note' => 15,
      'description' => '<p>Esse exercitation Lorem nostrud commodo Lorem exercitation ipsum officia. Duis mollit laborum Lorem.</p>',
      'nom de catégorie' => 'film',
      'une image' => '<img style="width:30%;" src="https://i.ytimg.com/vi/bFeRK4EUeTk/hqdefault.jpg"',
      'tags' => array('film' ,'turque','kaybedenler' ),
      'auteur' => array('nom' => 'Ornek', 'prenom' => 'Tolga', 'Mail' => 'tolga.ornek@gmail.com'),
      'video' => array('<iframe width="560" height="315" src="https://www.youtube.com/embed/iBeZzvyTQW8" frameborder="0" allowfullscreen></iframe>','<iframe width="560" height="315" src="https://www.youtube.com/embed/BWgkfzxA2yA" frameborder="0" allowfullscreen></iframe>'),
      );

      $article2  = array(
        'titre' => 'La ferme des animaux',
        'resume' => 'livre de 1945',
        'note' => 16,
        'description' => '<p>Esse exercitation Lorem nostrud commodo Lorem exercitation ipsum officia. Duis mollit laborum Lorem.</p>',
        'nom de catégorie' => 'livre',
        'une image' => '<img style="width:30%;" src="http://bledard.org/wp-content/uploads/2015/10/LA-FERME-DES-ANIMAUX.jpg"',
        'tags' => array('livre' ,'orwell','1945' ),
        'auteur' => array('nom' => 'Orwell', 'prenom' => 'Georges', 'Mail' => 'georges.orwell@gmail.com'),
        'video' => array('<iframe width="560" height="315" src="https://www.youtube.com/embed/GgzLTtDiuHE" frameborder="0" allowfullscreen></iframe>','<iframe width="560" height="315" src="https://www.youtube.com/embed/RDRwDpviM0g" frameborder="0" allowfullscreen></iframe>'),
        );

        $article3  = array(
          'titre' => 'Fight Club',
          'resume' => 'film américain de David Fincher',
          'note' => 16,
          'description' => '<p>Fight Club est un film américain de David Fincher, sorti en 1999 et adapté du roman éponyme de Chuck Palahniuk.</p>',
          'nom de catégorie' => 'film',
          'une image' => '<img style="width:30%;" src="http://www.greenroom.fr/wp-content/uploads/2015/06/fight-club-crop.jpg"',
          'tags' => array('film' ,'americain','marla','Chuck'),
          'auteur' => array('nom' => 'Palahniuk', 'prenom' => 'Chuck', 'Mail' => 'Chuck.Palahniuk@gmail.com'),
          'video' => array('<iframe width="560" height="315" src="https://www.youtube.com/embed/SUXWAEX2jlg" frameborder="0" allowfullscreen></iframe>','<iframe width="560" height="315" src="https://www.youtube.com/embed/kqWOmEOP7XI" frameborder="0" allowfullscreen></iframe>'),
          );

        $tabArticles  = array($article1,$article2,$article3);

        foreach ($tabArticles as $article) {
          echo '<div class="panel panel-success col-md-8">';
          echo '<div class="panel-heading">';
                foreach ($article as $key => $value) {
                  if ($key =='titre') {
                    echo'<h3 class="panel-title">'.$value.'</h3>';
                  }
                }
          echo '</div><div class="panel-body"><ul>';
           foreach ($article as $key => $value) {

             if ($key == 'tags' || $key == 'video' || $key == 'auteur') {
                echo '<li>'.$key. ': <br>'  ;
               foreach ($value as $tagKey => $tagValue) {
                  echo '<li>' .$tagKey. ': ' .$tagValue.' </li>';
               }

             } else {
               echo '<li>'.$key. ': ' .$value. ' </li>';
             }
            echo '</ul>';
           }
        echo '</div></div>';

        }
      ?>

    <!--Exercice 4: Les Fonctions
    * Créer une fonction qui prends un texte et qui supprime toutes les espaces-->


    <div class="panel panel-success col-md-8">
        <div class="panel-heading">
          <h3 class="panel-title">Exercice 4: Les Fonctions : Supprimer les espaces</h3>
        </div>
      <div class="panel-body">
        <?php
          function supprimEspace($phrase){
            $newPhrase=str_replace(' ','',$phrase);
            echo $newPhrase;
          }
          supprimEspace('Ici j\'écris ma phrase qui ne va plus avoir d\'espace');
        ?>
      </div>
    </div>

    <!--***********************************************************************-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
