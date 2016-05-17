<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 11:57 PM
 */
require "header_utilisateur.php";
echo"<div class='android-content mdl-layout__content'>
                <a name='top'></a>
                <div class='android-be-together-section mdl-typography--text-center'>
                    <div class='logo-font android-slogan'>Voyageant Ensemble. </div>
                    <div class='logo-font android-sub-slogan'>Projet web :MVC PHP... Created by Kais Neffati.</div>
                </div>";
require "../admin/trajet_view_admin.php";
require "../train_view.php";
require "../footer.php";