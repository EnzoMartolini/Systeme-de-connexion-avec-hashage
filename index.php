<?php 
require 'auth.php'; 
utilisateur_est_connecte();

echo 'Vous êtes connecté';

if(est_connecte()):
    echo <<<HTML
   </br> <a href="/logout.php">Se deconnecter</a>
HTML;
endif;

?>