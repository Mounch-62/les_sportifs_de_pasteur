<?php
session_start();
session_destroy();
header("Location:http://127.0.0.1/LesSportifsDePasteur/acceuil.php?erreur=0");
?>