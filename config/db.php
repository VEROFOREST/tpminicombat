<?php
$db = new PDO('mysql:host=localhost;dbname=jeu_de_combat', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
