<?php
session_start()
?>
<html>
    <head>
<link href="style.css" rel="stylesheet">
    </head>
    <body>
        <center>
            <h1>
                <?php
                if(isset($_SESSION["login"])){
                echo("<a href=logout.php>se déconnecter</a>");
                echo "</br> bjr ".$_SESSION["login"]." </br>vous êtes connecté";
                }
                else{
                    echo ("<a href=login.php?erreur=0>se connecter</a>");
                    echo("</br> bjr vous n'êtes pas connecté");
                }
                ?>
            </h1>    
    </center>
    
    </body>
</html>