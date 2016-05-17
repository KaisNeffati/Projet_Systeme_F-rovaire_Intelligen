<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/1/2016
 * Time: 9:30 AM
 */
$mysqli=new mysqli('localhost','root','','projet_transport');
if($mysqli->connect_error){
    die('Erreur de connexion (' . $mysqli ->connect_errno . ') ' . $mysqli ->connect_error);
}