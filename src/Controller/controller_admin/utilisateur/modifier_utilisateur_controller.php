<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 10:28 PM
 */

if ($_SESSION['connected']!=1)
    echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../../../index.php';
            </script> ";
else{
$path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Model/utilisateur.php';
require_once($path);
$u= new utilisateur();
$u->setNom($_POST['nom']);
$u->setPrenom($_POST['prenom']);
$u->setCin($_POST['cin']);
$u->setLogin($_POST['login']);
$u->setMotsDPasse($_POST['mots_d_passe']);
$u->setDateDNaissance($_POST['date_d_naissance']);
$u->setTel($_POST['tel']);
$u->setAccess($_POST['access']);
$u->modifier_utilisateur();}