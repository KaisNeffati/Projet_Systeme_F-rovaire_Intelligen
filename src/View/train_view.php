<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 10:06 PM
 */
?>
<div class="android-customized-section" id="TRAIN">
    <div class="android-customized-section-text">
        <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">TRAIN</div>
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
        <div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
            <!-- and probably also here -->
        </div>



    </div>
</div>


