<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 10:42 PM
 */
?>
<?php require("src/View/header.php");?>
<div class="android-content mdl-layout__content">
    <div class="content-grid mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
            <!-- add content here -->
        </div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
            <!-- also here -->

            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 100%;text-align: center;margin-top: 5%;padding: 10% 0%;">

                <div class="mdl-card__title" style="padding-left: 40%;">
                    <h2 class="mdl-card__title-text">Contacter nous</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="index.php">
                        <div class="mdl-textfield mdl-js-textfield" style="margin-left: 8%;">
                            <input class="mdl-textfield__input" type="text" id="prenom" >
                            <label class="mdl-textfield__label" for="prenom" >Prénom</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                            <input class="mdl-textfield__input" type="text" id="nom" >
                            <label class="mdl-textfield__label" for="nom" >Nom</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield" style="margin-left: 8%;">
                            <input class="mdl-textfield__input" type="text" id="sujet" >
                            <label class="mdl-textfield__label" for="sujet" >Sujet</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%">
                            <input class="mdl-textfield__input" type="text" id="tel" >
                            <label class="mdl-textfield__label" for="tel" >Tél+</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield" style="width: 92%;margin-left: 8%;">
                            <textarea class="mdl-textfield__input" type="text" rows= "3" id="description" ></textarea>
                            <label class="mdl-textfield__label" for="description">Description</label>
                        </div>
                        <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Envoyer" type="Submit" style="margin-top: 10%;">
                    </form>
                </div>


            </div>

        </div>
        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
            <!-- and probably also here -->
        </div>



    </div>

<?php require "src/View/footer.php";
