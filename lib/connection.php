<?php
include("../config/parameters.php");

try
    {
      $bdd = new PDO ('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', 'admin');
    }
    catch(Exception $e)
    {
      // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
    };



