<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 5:21 PM
 */
?>


    <?php require("src/View/header.php");?>
    <div class="android-content mdl-layout__content">
        <div class="content-grid mdl-grid">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
            <!-- add content here -->
            </div>
            <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
            <!-- also here -->
    
            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 85%;text-align: center;margin-top: 10%;padding: 20% 10%;">

                      <div class="mdl-card__title" style="padding-left: 34%;">
                        <h2 class="mdl-card__title-text">Welcome</h2>
                      </div>
                      <div class="mdl-card__supporting-text">
                        <form method="POST" action="src/Controller/s'authentifier.php">
                              <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="login" name="login" style="text-align: center;">
                                <label class="mdl-textfield__label" for="login" style="text-align: center;">Login</label>
                              </div>
                              <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="mots_d_passe" name="mots_d_passe" style="text-align: center;">
                                <label class="mdl-textfield__label" for="mots_d_passe" style="text-align: center;">Mots de passe</label>
                                </div>
                                <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Connexion" type="Submit" style="margin-top: 10%;">
                        </form>

                    </div>
              </div>

  </div>
  <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
    <!-- and probably also here -->
  </div>



</div>


</div>
</div>

<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>

</body>
</html>

