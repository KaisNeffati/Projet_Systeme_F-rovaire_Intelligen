<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/2/2016
 * Time: 6:28 PM
 */
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/trajet.php';
require_once($path);
$t= new trajet();
$t->afficher_list_trajet();