<html>
    <head>
    <!-- titre -->
    <title>Paul Berthelot - Login</title>
    <!-- lien vers css -->
    <link type="text/css" rel="stylesheet" href="login.css">
    <!-- text font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- icon web -->
    <link rel="icon" href="Image/paulberthelotico.ico" />

    </head>

    <body>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Framewwork ---------->
    
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="Image/PaulBerthelotCut.png" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form method="post" action="https://databases-auth.000webhost.com/sql.php?server=1&db=id12615311_contact&table=formulaire&pos=0">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="index.html">Retourner à l'accueil</a>
        </div>
    
      </div>
    </div>


<?php 

if($_POST){
    $Login = $_POST['login'];
    $Password = $_POST['password'];
   
    if (!empty($Login) AND !empty($Password) )
    {if (($Login == "admin") AND ($Password =="root")) {
      echo "<href: 'https://databases-auth.000webhost.com/sql.php?server=1&db=id12615311_contact&table=formulaire&pos=0'>";
    }else {
      echo "Erreur";
     };

    }
     
    };
?>  


</body>

</html>