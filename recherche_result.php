<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/5/2016
 * Time: 10:47 PM
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
        <style>
            #mapdiv {
                margin: 0;
                padding: 0;
                width: 500px;
                height: 500px;
            }
        </style>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
        <script>
            var watchId = null;
            function geoloc() {
                if (navigator.geolocation) {
                    var optn = {
                        enableHighAccuracy : true,
                        timeout : Infinity,
                        maximumAge : 0
                    };
                    watchId = navigator.geolocation.watchPosition(showPosition, showError, optn);
                } else {
                    alert('Geolocation is not supported in your browser');
                }
            }

            function showPosition(position) {
                var googlePos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                var mapOptions = {
                    zoom : 18,
                    center : googlePos,
                    mapTypeId : google.maps.MapTypeId.ROADMAP
                };
                var mapObj = document.getElementById('mapdiv');
                var googleMap = new google.maps.Map(mapObj, mapOptions);
                var markerOpt = {
                    map : googleMap,
                    position : googlePos,
                    title : 'Hi , I am here',
                    animation : google.maps.Animation.DROP
                };
                var googleMarker = new google.maps.Marker(markerOpt);
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng' : googlePos
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var popOpts = {
                                content : results[1].formatted_address,
                                position : googlePos
                            };
                            var popup = new google.maps.InfoWindow(popOpts);
                            google.maps.event.addListener(googleMarker, 'click', function() {
                                popup.open(googleMap);
                            });
                        } else {
                            alert('No results found');
                        }
                    } else {
                        alert('Geocoder failed due to: ' + status);
                    }
                });
            }

            function stopWatch() {
                if (watchId) {
                    navigator.geolocation.clearWatch(watchId);
                    watchId = null;

                }
            }

            function showError(error) {
                var err = document.getElementById('mapdiv');
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        err.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        err.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        err.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        err.innerHTML = "An unknown error occurred."
                        break;
                }
            }
        </script>
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

    <div class="android-content mdl-layout__content">
        <div class="content-grid mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
                <!-- add content here -->
            </div>
            <div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <!-- also here -->

                <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 100%;text-align: center;margin-top: 5%;padding: 10% 0%;">

                    <div class="mdl-card__title" style="padding-left: 40%;">
                        <h2 class="mdl-card__title-text">Recherche Trajet</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <?php
                        $path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Controller/afficher_trajet_controller_recherche.php';
                        require_once($path);?>
                    </div>
                </div>

            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
                <!-- and probably also here -->
            </div>



        </div>

<?php require "src/View/footer.php";
