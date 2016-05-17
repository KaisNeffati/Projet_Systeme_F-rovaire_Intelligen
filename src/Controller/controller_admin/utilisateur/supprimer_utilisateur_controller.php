<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 10:38 PM
 */
if ($_SESSION['connected']!=1)
    echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../../../index.php';
            </script> ";
else{
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/utilisateur.php';
require_once($path);
$u= new utilisateur();
$u->setLogin($_POST['login']);
$u->supprimer_utilisateur();}