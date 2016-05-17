<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/5/2016
 * Time: 10:49 PM
 */
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/trajet.php';
require_once($path);
$t= new trajet();
$t->setVilleDepart($_POST['ville_depart']);
$t->setVilleArrivee($_POST['ville_arrivee']);
$t->setDepart($_POST['depart']);
$t->setArrivee($_POST['arrivee']);
$t->afficher_list_trajet_recherche();