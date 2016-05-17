<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 12:02 AM
 */
if ($_SESSION['connected']!=1)
    echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../../../index.php';
            </script> ";
else{
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/trajet.php';
require_once($path);
$t= new trajet();
$t->setId($_POST['id']);
$t->supprimer_trajet();}