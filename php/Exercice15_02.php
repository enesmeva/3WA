<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

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
  <body style="padding-bottom:20rem;">
    <!--EXO 1
  /*** Afficher 3 panels différents avec bootstrap.
   * créer des variables pour stocker les données des 3 films.
   * (Titre / synopsis et année de sortie)
   * afficher le tout dans chaquun des panels. (1 film / panel)
   * panel-title = le titre
   * panel-body = le synopsis
   * panel-footer = l'année
   * http://getbootstrap.com/components/#panels -->
  <!--***********************************************************************-->
  <div class="panel panel-success col-md-8">
<div class="panel-heading">Film : Her</div>
<div class="panel-body">
<?php
  $titre="Her";
  $synopsis="Los Angeles, dans un futur proche. Theodore Twombly, un homme sensible au caractère complexe, est inconsolable suite à une rupture difficile.";
  $annee=2014;
  echo '<ul class="list-group"><li class="list-group-item">'.$titre.'</li>';
  echo '<li class="list-group-item">'.$synopsis.'</li>';
  echo '<li class="list-group-item">'.$annee.'</li></ul>';
?>
</div>
</div>

<div class="panel panel-success col-md-8">
<div class="panel-heading">
  <h3 class="panel-title">Bad Grandpa</h3>
</div>
<div class="panel-body">
  <?php
    $titre="Bad Grandpa";
    $synopsis="Los Angeles, dans un futur proche. Theodore Twombly, un homme sensible au caractère complexe, est inconsolable suite à une rupture difficile.";
    $annee=2013;
    echo '<ul class="list-group"><li class="list-group-item">'.$titre.'</li>';
    echo '<li class="list-group-item">'.$synopsis.'</li>';
    echo '<li class="list-group-item">'.$annee.'</li></ul>';
  ?>
</div>
</div>
<div class="panel panel-success col-md-8">
<div class="panel-heading">
  <h3 class="panel-title">L'odyssée de Pi</h3>
</div>
<div class="panel-body">
  <?php
    $titre="L'odyssée de Pi";
    $synopsis="Los Angeles, dans un futur proche. Theodore Twombly, un homme sensible au caractère complexe, est inconsolable suite à une rupture difficile.";
    $annee=2013;
    echo '<ul class="list-group"><li class="list-group-item">'.$titre.'</li>';
    echo '<li class="list-group-item">'.$synopsis.'</li>';
    echo '<li class="list-group-item">'.$annee.'</li></ul>';
  ?>
</div>
</div>


    <!-- EXO 3
   /**
    * Sur cette exercice, faîtes en sorte d'ajouter une modale dans votre
    * lien auteur.
    * Cette modal affichera dans le titre, un titre accrocheur genre :
    * - Le nouveau programmeur est née !!
    * - Mark Zuckerberg, je suis bien meilleur que toi !!
    * - Mais qui es-ce ? Une machine ? un mutant ?
    * - etc...
    *
    * Ajoutez cette fois-ci toutes vos informations avec en prime l'affichage
    * d'une photo Drôle.
    * - Nom
    * - Prénom
    * - Age
    * - Date de Naissance
    * - Ville
    * - Téléphonne
    * - Une photo
    * - votre carte bleu... Eh je déconne hein :D
    *
    **/ -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bienvenue sur ma page</h4>
      </div>
      <div class="modal-body">
        <ul>
          <li>Nom : KELEKLI</li>
          <li>Prénom : Fatma</li>
          <li>Age : 31</li>
          <li>Date de naissance : 02/06/1985</li>
          <li>Ville : Lyon</li>
          <li><img style="width:20%;" src="https://i.ytimg.com/vi/bFeRK4EUeTk/hqdefault.jpg"></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- EXO 4
   /**
    * Concevez 4 citations qui seront affiché selon votre humeur sur votre page
    * auteur.
    * -
    * Affichez dans un tableau sur l'index en tout petit les citations
    * que vous avez associé selon l'humeur.
    *
    * Affichez aux 2 endroits une icône pour l'humeur.
    **/ -->
    <div class="panel panel-success col-md-8">
    <div class="panel-heading">
      <h3 class="panel-title">Exercice4 : Citations</h3>
    </div>
    <div class="panel-body">
      <?php

          $tristesse ='Il y toujours quelqu\'un qui vaporise l\'air de son humeur.';
          $joie = 'Si vous voulez que la vie vous sourie, apportez-lui d\'abord votre bonne humeur.';
          $colère ='La colère est le commencement de la folie.';
          $peur = 'La peur, c\'est l\'enfant en nous qui panique.';
      ?>
      <table class="table table-bordered">
          <caption>Tableau des Humeurs</caption>
          <thead>
            <tr>
              <th>Humeur</th>
              <th>Citation</th>
              <th>Icône</th>
            </tr>
            <tr>
              <td>Tristesse</td>
              <td><?php echo $joie; ?></td>
              <td><i class="fa fa-frown-o" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>joie</td>
              <td><?php echo $tristesse; ?></td>
              <td><i class="fa fa-smile-o" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Colère</td>
              <td><?php echo $colère; ?></td>
              <td><i class="fa fa-snowflake-o" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Peur</td>
              <td><?php echo $peur; ?></td>
              <td><i class="fa fa-child" aria-hidden="true"></i></td>
            </tr>
          </thead>
      </table>
    </div>
  </div>

  <!-- EXO 5
   /**
    * Choisissez 3 films
    * - Un nul
    * - Un moyen
    * - Un top
    * Affichez dans un panel :
    * - Le titre
    * - L'image
    * - La note
    * Pour la note, il vous faut une image d'étoile.
    * Trouvez une fonction permettant de répéter l'image de façon à obtenir une note sur :
    * - 2 étoiles
    * - 3 étoiles
    * - 4 ou 5 étoiles.
    **/ -->

    <div class="panel panel-success col-md-8">
      <div class="panel-heading">
        <h3 class="panel-title">Exercice 5</h3>
      </div>
      <div class="panel-body">
        <?php
          $film1 = array(
              'titre' =>'Brice de Nice',
              'Image'=>'<img style="display:block; max-width:20%;" src="http://fr.web.img4.acsta.net/r_1920_1080/medias/nmedia/18/35/44/62/18397694.jpg"',
              'note'=>1);
          $film2  = array(
            'titre' =>'Mustang',
            'Image' => '<img style="display:block; max-width:20%;" src="http://fr.web.img4.acsta.net/r_1920_1080/pictures/15/05/11/17/29/296041.jpg"/>',
            'note' => 3 );
          $film3 = array(
            'titre' =>'Winter Sleep',
            'Image'=>'<img style="display:block; max-width:20%;" src="http://fr.web.img6.acsta.net/r_1920_1080/pictures/14/05/27/09/38/153527.jpg"',
            'note'=>5);
          $tabFilm  = array($film1,$film2,$film3);
        ?>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Film</td>
              <td>Affiche</td>
              <td>Note</td>
            </tr>
            <?php
              foreach ($tabFilm as $film) {
                echo "<tr>";
                foreach ($film as $key => $value) {
                  echo "<td>". $value .'</td>';
                if ($key =='note') {
                    echo "<td>";
                  for ($i=0; $i < $value ; $i++) {
                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                  }
                } echo "</td>";
                }
              }
            ?>
          </thead>
        </table>
      </div>
    </div>
    <!-- EXO 6
   /**
    * Concevez une page de plusieurs fonctions anonyme.
    *
    * Recherchez :
    * - Une fonction pour s'assurer que son nom soit toujours tout en majuscule.
    * - Une fonction pour s'assurer que cette fois-ci, le prénom commencera uniquement avec une majuscule
    * - Une fonction pour forcer une chaîne de caractère en minuscule..
    *
    * - (Amusement 1)
    * - Trouvez un palindrome et afficher ce texte dans les 2 sens d'écriture.
    * - (Une fonction permettant d'inverser le sens d'une phrase existe)
    *
    * - (Amusement 2)
    * - Concevez une variable qui permettra d'avoir toutes votre phrase mélanger.
    * - Dans le calme, tenté de décrypter la phrase de votre voisin.
    * en bonus (Amusement 3) - Complexe
    * - Concevez 3 boutons en JQUERY qui afficherai une boîte de dialogue selon le résultat demandé.
    * -    1 - T'es à côté de la plaque.
    * -    2 - T'es franchement pas loins...
    * -    3 - Bravo tu as trouvé.
    * /!\ Seule l'auteur de la phrase mélangé cliquera sur la réponse pour vous donner une idée du résultat.
    **/ -->
  <div class="row">
    <div class="panel panel-success col-md-8">
      <div class="panel-heading">
        <h3 class="panel-title">Majuscule/Minuscule</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item"><?php echo strtoupper('einstein'); ?></li>
          <li class="list-group-item"><?php echo ucfirst('albert'); ?></li>
          <li class="list-group-item"><?php echo strtolower('JE SUIS FATIGUEE'); ?></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="panel panel-success col-md-8">
      <div class="panel-heading">
        <h3 class="panel-title">Palindrome</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item"><?php echo 'engage le jeu que je le gagne'; ?></li>
          <li class="list-group-item"><?php echo strrev('engage le jeu que je le gagne'); ?></li>
        </ul>
      </div>
    </div>
  </div>
<!--************************************************************************-->
  <div class="row">
    <div class="panel panel-success col-md-8">
      <div class="panel-heading">
        <h3 class="panel-title">Mot mélangé</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
          <?php $mot="un petit chaton"; ?>
          <li class="list-group-item"><?php echo str_shuffle($mot); ?></li>
        </ul>
        <div class="input-group">
          <label for="resultat" class="control-label">Résultat</label>
          <input type="text" id="resultat" class="form-control">
        </div>
        <br>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button id="btnRate" type="button" class="btn btn-danger">Raté</button>
          </div>
          <div class="btn-group" role="group">
            <button id="btnPresque" type="button" class="btn btn-warning">Presque</button>
          </div>
          <div class="btn-group" role="group">
            <button id="btnBravo" type="button" class="btn btn-success">Bravo</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- EXO 7
  /**
   * Conception d'un session.
   * récupérer son prénom dans une session et l'afficher dans une autre page.
   * Ne surtout pas oublier le session_start
   **/ -->




  <!-- EXO 2
     /**
      * Concevez un footer qui devra être positionner en bas quelque
      * soit la position ou nous nous trouvons.
      * (Astuce - voir le positionnement)
      * Une fois le footer créé, faîtes en sorte de créé et d'afficher un
      * lien vers un auteur.
      * Ce lien devra être afficher avec votre pseudo. (variable ?)
      *
      * Ajouter ensuite toujours dans le footer mais c'est fois-ci tout à droite,
      * une phrase avec le nombre de visite sur cette page.
      * (Définissez une variable de type integer).
      * En gros vous allez utiliser du html et du php en même temps.
      **/ -->
      <footer class="container-fluid" style="width:100%;">
          <?php
          $pseudo="fat-mom";
          $compteur=100;
          ?>
          <div class="panel-footer col-md-8" style="position: fixed; bottom: 0; left: 0; right: 0">
            <a href="https://fr.wikipedia.org/wiki/George_Orwell"><?php echo $pseudo; ?></a>
            <p style="text-align:right;">compteur : <?php echo $compteur;  ?></p>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button>
          </div>
        </div>
      </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/exo1502.js"></script>
  </body>
</html>
