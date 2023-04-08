<?php
ob_start();
session_start();

// redirection sur la page de connexion
header('Location: signin.php');
// Deconnexion de lutilisateur
session_destroy();



?>