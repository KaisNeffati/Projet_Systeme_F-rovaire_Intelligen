<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 9:32 PM
 */
if ($_SESSION['connected']!=1)
    echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../../../index.php';
            </script> ";
else{
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/train.php';
require_once($path);
$t= new train();
$t->setId($_POST['id']);
$t->setNom($_POST['nom']);
$t->setMarque($_POST['marque']);
$t->setVitesse($_POST['vitesse']);
$t->setPlace($_POST['place']);
$t->modifier_trajet();}