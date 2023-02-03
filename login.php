<html>
    <head>
        <title>
            Page de connexion
        </title>
<link href="style.css" rel="stylesheet">
    </head>
    <body>
        <center>
            <h1>Se connecter</h1>
    <form action="check_login.php" method="post">
        <p>Identifiant :
        <input type="text" name="login"></p>
        Mot de passe :
        <input type="password" name="pwd"></p>
        <p><input type="submit" value="connexion"></p>
</form>

<?php
if(isset($_GET["erreur"])){
    if($_GET["erreur"]==1){
        echo("Mot de passe ou identifiant FAUX");
    }
else{
    
}
}?>
</center>
    </body>
</html>