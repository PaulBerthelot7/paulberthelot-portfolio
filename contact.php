<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf8">
  <!-- titre  -->
  <title>Paul Berthelot - Contact</title>
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- lien vers css -->
  <link type="text/css" rel="stylesheet" href="contact.css">
  <!-- text font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- icon web -->
  <link rel="icon" href="Image/paulberthelotico.ico" />
  <!-- icon navbar link -->
  <link href='https://css.gg/profile.css' rel='stylesheet'>
  <link href='https://css.gg/software-download.css' rel='stylesheet'>
  
</head>

<body>
  <!-- boostrap navbar -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>


  <!-- navbar -->

  <nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">BERTHELOT</a>
    <!-- listes des onglets -->

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="propos.html">A Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="stage.html">Stages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="int.html">Intêret</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comp.html">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project.html">Projet</a>
        </li>

      </ul>
      <!-- icon web -->
      <a href="Image/cvpb.pdf" download="cvpb " id="dl" class="gg-software-download" target="_blank"></a>
      <a href="login.php" id="slash"class="gg-profile"></a>
    </div>
  </nav>

  <!-- Contenu de la page -->

  <div id="grosbloc">
    <!-- bloc texte -->
    <div id="blocg">
      <!-- titre -->
      <h3>Contactez moi</h3>
      <div>
        <p> Si vous voulez me contacter : </p>
        <br />
        <p>Email : paulberthelot7@hotmail.com</p>
        <br />
        <p>Téléphone : 07 51 69 16 04</p>
        <br />
        <p>Si vous voulez avoir accès à mon cv, veuillez cliquez sur l'icône téléchargement de la barre de navigation.
        </p>
      </div>
      <br />

      <!--  -->


    </div>


<!-- bloc formulaire -->
    <div id="blocd">
      <!-- titre -->
      <h3> Donnez moi votre avis !</h3>
      <!-- formulaire -->
      <form method="post">
        <fieldset>
          <legend></legend>
          <p><!-- name input -->
            <label for="prenom"></label>
            <input type="text" name="Name" id="nom2" placeholder="Votre nom" autofocus required />
          </p>

          <p><!-- email input -->
            <label for="email"></label>
            <input type="email" name="Email" id="email" placeholder="Votre email" autofocus required />
          </p>

          <p><!-- paragraphe input -->
            <textarea name="Message"id="parag" placeholder="Votre texte" rows="5" cols="50"></textarea>
          </p>

          <!-- input envoyer -->
          <input type="submit" value="Envoyer">

        </fieldset>

      </form>



    </div>

  </div>

  <div style="clear: both;">

<!-- base de données -->
<?php 
//connexion a la base de données

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id12615311_contact;charset=utf8', 'id12615311_paulberthelot7', '12345');
    // $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', ''); UTILISE POUR LE LOCAL
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if($_POST){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    
    //verification si une valeur n'est pas vide
    if (!empty($Name) AND !empty($Email) AND !empty($Message)) 
    {
        //envoie des valeur dans la BDD
        $bdd->query('INSERT INTO formulaire (nom, email, message) VALUES("'.$Name.'", "'.$Email.'", "'.$Message.'")')or die('Erreur: Il y a une erreur');
        $pop='Votre formulaire a bien été envoyé';
        echo '<script type="text/javascript">window.alert("'.$pop.'");</script>';
    }
    //si un valeur est vide envoie d'une erreur
     else {
     $erreur='Erreur, il manque des valeurs';
     echo '<script type="text/javascript">window.alert("'.$erreur.'");</script>';
     };

    };
?>




</body>

</html>

<!-- fin -->

<!-- par Paul Berthelot -->