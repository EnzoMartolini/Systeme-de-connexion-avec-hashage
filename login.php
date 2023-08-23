<?php 
require 'auth.php';
   $erreur = null;
   $password='$2y$10$HRWCwLzERIX2jAIy1PXBIecuMcs867W/Sc/hV6bJGwwML3yOebaZm';
   if(!empty($_POST['username']) && !empty($_POST['password'])):
        if($_POST['username']==='admin' && password_verify($_POST['password'],$password)):
            session_start();
            $_SESSION['connecte']=1;
            header('location: /index.php');
        else:
            $erreur='Identifiants incorrects';
        endif;
    elseif(est_connecte()):
        header('location: /index.php');
    endif;

        if($erreur):
            echo $erreur;
        endif;
?>

    <form action="" method="POST">
    <label>Entrez votre pseudo<label>
    <input type='text' name='username' placeholder='admin' style="font-style:italic;">
    <label>Entrez votre mot de passe<label>
    <input type='password' name='password' placeholder='admin' style="font-style:italic;">

    <button type= 'submit'>Envoyer</button>
    </form>