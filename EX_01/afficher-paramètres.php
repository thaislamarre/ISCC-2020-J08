<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
        <meta charset="utf-8">
        <title>mini-site-routing</title>  
    </head>

<body>
    <?php
       //...printf ("<a href=http://localhost/iscc/ISCC-2020-J08/Exo_01/afficher-parametres.php?param1=valeur1&param2=valeur2);//... 
     $_GET['param1']="valeur1";
     $_GET['param2']="valeur2";

     echo $_GET['param1']."<br>";
     echo $_GET['param2']."<br>";
    ?>