<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/2/2016
 * Time: 11:17 PM
 */
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/trajet.php';
require_once($path);
$t= new trajet();
$t->setVilleDepart($_POST['ville_depart']);
$t->setDepart($_POST['depart']);
$t->setArrivee($_POST['arrivee']);
$t->setNombreDeArret($_POST['nombre_d_arret']);
$t->setLongeur($_POST['longeur']);
$t->setBillets($_POST['billets']);
$t->setVilleArrivee($_POST['ville_arrivee']);
$t->setIdTrain($_POST['id_train']);
$t->insert_trajet();
