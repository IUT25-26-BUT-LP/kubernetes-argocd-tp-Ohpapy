<?php
// Faille XSS : affiche directement ce que l'utilisateur envoie sans sanitisation
echo "<h1>Bonjour " . $_GET['name'] . "</h1>";

// Faille : mot de passe en dur
$db_password = "supersecret123";

// Faille injection SQL
$query = "SELECT * FROM users WHERE id = " . $_GET['id'];
?>