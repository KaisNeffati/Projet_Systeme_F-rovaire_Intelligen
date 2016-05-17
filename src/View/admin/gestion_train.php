<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 5:31 AM
 */

require("header_admin.php");?>
    <div class="android-content mdl-layout__content">
    <div class="content-grid mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
            <!-- add content here -->
        </div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
            <!-- also here -->

            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 100%;text-align: center;margin-top: 5%;padding: 10% 0%;">

                <div class="mdl-card__title" style="padding-left: 37%;">
                    <h2 class="mdl-card__title-text">Gestion des Trains</h2>
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
                                    <th>Nom</th>
                                    <th>Marque</th>
                                    <th>place</th>
                                    <th>Vitesse</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Controller/controller_admin/train/afficher_train_controller.php';
                                require_once($path);?>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-tabs__panel" id="ajouter"><br><br>
                            <form method="post" action="../../Controller/controller_admin/train/ajouter_train_controller.php">
                                <div class="mdl-textfield mdl-js-textfield" >
                                    <input class="mdl-textfield__input" type="text" id="nom" name="nom">
                                    <label class="mdl-textfield__label" for="nom" >Nom</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                    <input class="mdl-textfield__input" type="text" id="marque" name="marque">
                                    <label class="mdl-textfield__label" for="marque" >Marque</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="">
                                    <input class="mdl-textfield__input" type="text" id="vitesse" name="vitesse">
                                    <label class="mdl-textfield__label" for="vitesse" >Vitesse</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                    <input class="mdl-textfield__input" type="number" id="place" name="place">
                                    <label class="mdl-textfield__label" for="place" >Place</label>
                                </div><br>
                                <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Ajouter" type="Submit" style="margin-top: 10%;">
                            </form>
                        </div>
                        <div class="mdl-tabs__panel" id="modifier"><br><br>
                            <form method="post" action="../../Controller/controller_admin/train/modifier_train_controller.php">
                                <div class="mdl-textfield mdl-js-textfield" >
                                    <input class="mdl-textfield__input" type="text" id="id" name="id">
                                    <label class="mdl-textfield__label" for="id" >Saisir_identifiant</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                    <input class="mdl-textfield__input" type="text" id="nom" name="nom">
                                    <label class="mdl-textfield__label" for="nom" >Nom</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="">
                                    <input class="mdl-textfield__input" type="text" id="marque" name="marque">
                                    <label class="mdl-textfield__label" for="marque" >Marque</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                                    <input class="mdl-textfield__input" type="text" id="vitesse" name="vitesse">
                                    <label class="mdl-textfield__label" for="vitesse" >Vitesse</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield" style="">
                                    <input class="mdl-textfield__input" type="number" id="place" name="place">
                                    <label class="mdl-textfield__label" for="place" >Place</label>
                                </div><br>
                                <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Modifier" type="Submit" style="margin-top: 10%;">
                            </form>
                        </div>
                        <div class="mdl-tabs__panel" id="supprimer">
                            <form method="post" action="../../Controller/controller_admin/train/supprimer_train_controller.php" style="margin-top: 10%;">
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
        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
            <!-- and probably also here -->
        </div>



    </div>

<?php require "../footer.php";