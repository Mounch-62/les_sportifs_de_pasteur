<?php $mysqlConnection = new PDO(
    
    'mysql:host=localhost;dbname=tp_php;charset=utf8',
     
    'root',
    
    '',
    
    ); 
    $requete = $mysqlConnection->prepare('SELECT * FROM user WHERE login= :login AND pwd= :pwd');
    $requete->execute([
        'login' => $_POST["login"],
        'pwd' => $_POST["pwd"],
    ]);
    $ligne= $requete->fetch();
    //var_dump($ligne);die();
    if($ligne){
        session_start();
        $_SESSION["login"]=$_POST["login"];
        header("Location:http://127.0.0.1/LesSportifsDePasteur/acceuil.php?erreur=0");
    }
    else
    {
        header("Location:http://127.0.0.1/LesSportifsDePasteur/login.php?erreur=1");
    }
    ?>