<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 12:38 AM
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
$t->setVilleDepart($_POST['ville_depart']);
$t->setVilleArrivee($_POST['ville_arrivee']);
$t->setDepart($_POST['depart']);
$t->setArrivee($_POST['arrivee']);
$t->setNombreDeArret($_POST['nombre_d_arret']);
$t->setLongeur($_POST['longeur']);
$t->setBillets($_POST['billets']);
$t->setRetard($_POST['retard']);
$t->setIdTrain($_POST['id_train']);
$t->modifier_trajet();}