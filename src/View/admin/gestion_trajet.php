<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/2/2016
 * Time: 10:05 PM
 */

    require("header_admin.php");?>
    <div class="android-content mdl-layout__content">
        <div class="content-grid mdl-grid">
            <div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
                <!-- add content here -->
            </div>
            <div class="mdl-cell mdl-cell--10-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <!-- also here -->

                <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 100%;text-align: center;margin-top: 5%;padding: 10% 0%;">

                    <div class="mdl-card__title" style="padding-left: 37%;">
                        <h2 class="mdl-card__title-text">Gestion des Trajets</h2>
                    </div>
                    <div class="mdl-card__supporting-text" style="width: 97%;">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                            <div class="mdl-tabs__tab-bar">
                                <a href="#afficher" class="mdl-tabs__tab is-active">Afficher</a>
                                <a href="#ajouter" class="mdl-tabs__tab">Ajouter</a>
                                <a href="#modifier" class="mdl-tabs__tab">Modifier</a>
                                <a href="#supprimer" class="mdl-tabs__tab">Supprimer</a>
                            </div>

                            <div class="mdl-tabs__panel is-active" id="afficher">
                                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="margin-top:5%;width: 100%">
                                    <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric">Id</th>
                                        <th>ville de depart</th>
                                        <th>ville d'arrivee</th>
                                        <th>Depart</th>
                                        <th>Arrivee</th>
                                        <th>Retard</th>
                                        <th>Longeur</th>
                                        <th>Arret</th>
                                        <th>Billets</th>
                                        <th>Train</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Controller/controller_admin/trajet/afficher_trajet_controller_admin.php';
                                    require_once($path);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mdl-tabs__panel" id="ajouter"><br><br>
                                <form method="post" action="../../Controller/controller_admin/trajet/ajouter_trajet_controller.php">
                                    <div class="mdl-textfield mdl-js-textfield" >
                                        <input class="mdl-textfield__input" type="text" id="ville_d_depart" name="ville_depart">
                                        <label class="mdl-textfield__label" for="ville_d_depart" >Ville Depart</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="Depart" name="ville_arrivee">
                                        <label class="mdl-textfield__label" for="Depart" >Ville arrivee</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" >
                                        <input class="mdl-textfield__input" type="text" id="Depart" name="depart">
                                        <label class="mdl-textfield__label" for="Depart" >Horaire Depart hh:mm:ss</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="Arrive" name="arrivee">
                                        <label class="mdl-textfield__label" for="Arrive" >Horaire Arrive hh:mm:ss</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="">
                                        <input class="mdl-textfield__input" type="number" id="nombre_d_arret" name="nombre_d_arret">
                                        <label class="mdl-textfield__label" for="nombre_d_arret" >nombre d'arret</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="longeur" name="longeur">
                                        <label class="mdl-textfield__label" for="longeur" >longeur</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="">
                                        <input class="mdl-textfield__input" type="number" id="billets" name="billets">
                                        <label class="mdl-textfield__label" for="billets" >billets</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <label class="mdl-textfield__label" for="id_train" >id train</label>
                                        <?php require "../../Controller/id_train.php"?>
                                    </div>

                                    <br>
                                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Ajouter" type="Submit" style="margin-top: 10%;">
                                </form>
                            </div>
                            <div class="mdl-tabs__panel" id="modifier"><br><br>
                                <form method="post" action="../../Controller/controller_admin/trajet/modifier_trajet_controller.php">
                                    <div class="mdl-textfield mdl-js-textfield" >
                                        <input class="mdl-textfield__input" type="text" id="id" name="id">
                                        <label class="mdl-textfield__label" for="id" >Saisir_identifiant</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="ville_depart" name="ville_depart">
                                        <label class="mdl-textfield__label" for="ville_depart" >Ville Depart</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" >
                                        <input class="mdl-textfield__input" type="text" id="ville_arrivee" name="ville_arrivee">
                                        <label class="mdl-textfield__label" for="ville_arrivee" >Ville arrivee</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="Depart" name="depart">
                                        <label class="mdl-textfield__label" for="Depart" >Depart hh:mm:ss</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="">
                                        <input class="mdl-textfield__input" type="text" id="Arrivee" name="arrivee">
                                        <label class="mdl-textfield__label" for="Arrivee" >Arrivee hh:mm:ss</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="number" id="nombre_d_arret" name="nombre_d_arret">
                                        <label class="mdl-textfield__label" for="nombre_d_arret" >Nombre d'arret</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="">
                                        <input class="mdl-textfield__input" type="number" id="Billets" name="billets">
                                        <label class="mdl-textfield__label" for="Billets" >Billets</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <input class="mdl-textfield__input" type="text" id="Longeur" name="longeur">
                                        <label class="mdl-textfield__label" for="Longeur" >Longeur</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="">
                                        <input class="mdl-textfield__input" type="text" id="Retard" name="retard">
                                        <label class="mdl-textfield__label" for="Retard" >Retard</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                        <label class="mdl-textfield__label" for="id_train" >id train</label>
                                        <?php require "../../Controller/id_train.php"?>
                                    </div><br>
                                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Modifier" type="Submit" style="margin-top: 10%;">
                                </form>
                            </div>
                            <div class="mdl-tabs__panel" id="supprimer">
                                <form method="post" action="../../Controller/controller_admin/trajet/supprimer_trajet_controller.php" style="margin-top: 10%;">
                                    <div class="mdl-textfield mdl-js-textfield" style="margin-right:2%">
                                        <input class="mdl-textfield__input" type="text" id="id" name="id">
                                        <label class="mdl-textfield__label" for="id" >Saisir_identifiant</label>
                                    </div>
                                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="supprimer" type="Submit" >
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
                <!-- and probably also here -->
            </div>



        </div>

<?php require "../footer.php";
