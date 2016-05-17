<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 5:51 AM
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
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="margin-top:5%;width: 100%">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Id</th>
                    <th>Ville Depart</th>
                    <th>Ville Arrivee</th>
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
<div class="mdl-cell mdl-cell--1-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
    <!-- and probably also here -->
</div>



</div>

</div>
<div class="android-wear-section" style="    height: 500px;">
    <div class="android-wear-band"style="background-color: #181F23;">
        <div class="android-wear-band-text" >
            <div class="mdl-typography--display-2 mdl-typography--font-thin">Le Meilleur Service</div>
            <p class="mdl-typography--headline mdl-typography--font-thin">
                Profiter de nos services.
            </p>
            <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                    Suivez nous&nbsp;<i class="material-icons">chevron_right</i>
                </a>
            </p>
        </div>
    </div>
</div>

