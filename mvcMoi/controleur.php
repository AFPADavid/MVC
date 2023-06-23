<?php

// Inclure le modèle
require_once 'model.php';

// Récupérer les données des utilisateurs depuis le modèle
$utilisateurs = getAllUsers();

// Inclure la vue pour afficher les utilisateurs
require_once 'vue.php';

?>
