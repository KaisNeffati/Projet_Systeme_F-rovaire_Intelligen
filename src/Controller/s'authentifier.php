<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/1/2016
 * Time: 9:36 AM
 */
require "../Model/utilisateur.php";
$u=new utilisateur();
$u->setLogin($_POST['login']);
$u->setMotsDPasse($_POST['mots_d_passe']);
$u->connecte();