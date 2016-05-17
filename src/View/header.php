<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 8:47 PM
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>System ferroviaire intelligent</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body onload="geoloc()">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="index.php"><img class="android-logo-image" src="images/train-logo1.png"></a>
          </span>
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="android-header-spacer mdl-layout-spacer"></div>

            <!-- Navigation -->
            <div class="android-navigation-container">
                <nav class="android-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase " href="#VOYAGE">Billets & info trajet</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase " href="recherche.php">recherche personnalisée</a>
                </nav>
            </div>


          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/train-logo1.png">
          </span>
            <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                <li class="mdl-menu__item">
                    <a href="login.php">Se connecter</a>
                </li>
                <li class="mdl-menu__item">A propos</li>
                <li class="mdl-menu__item">Contacter-nous</li>
            </ul>
        </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/train-logo1.png" style="width: 190px;height: 30px;">
        </span>
        <nav class="mdl-navigation">
            <span class="mdl-navigation__link" >Menu</span>
            <a class="mdl-navigation__link" href="index.php">Accueille</a>
            <a class="mdl-navigation__link" href="contacte.php">Contacter-nous</a>
            <a class="mdl-navigation__link" href="">A propos</a>
            <div class="android-drawer-separator"></div>
            <a class="mdl-navigation__link" href="login.php">Se connecter</a>
            <a class="mdl-navigation__link" href="">S'inscrire</a>
            <div class="android-drawer-separator"></div>
            <span class="mdl-navigation__link" href="">Politique</span>
            <a class="mdl-navigation__link" href="">Lisez moi</a>
        </nav>
    </div>
