<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 9:58 PM
 */
?>
<div class="android-customized-section" id="VOYAGE">
    <div class="android-customized-section-text">
        <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Billets & info trajet</div>
        <p class="mdl-typography--font-light">
           *****************************<br>
        </p>
    </div>
    <div class="content-grid mdl-grid" style="margin-bottom: 10%">
        <div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
            <!-- add content here -->
        </div>
        <div class="mdl-cell mdl-cell--10-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
            <!-- also here -->
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="width: 100%">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">ville de depart</th>
                    <th>ville d'arrivee</th>
                    <th>Depart</th>
                    <th>Arrivee</th>
                    <th>Longeur</th>
                    <th>Arret</th>
                    <th>Billets</th>
                    <th>Train</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $path=$_SERVER['DOCUMENT_ROOT'].'/projects/Projet web/src/Controller/afficher_trajet_controller.php';
                require_once($path);?>
                </tbody>
            </table>


        </div>
        <div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
            <!-- and probably also here -->
        </div>



    </div>

</div>

