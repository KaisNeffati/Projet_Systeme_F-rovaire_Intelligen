<?php
/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 7:05 PM
 */
require "../../Model/connecte_db.php";
$result=$mysqli->query("SELECT id FROM train");
echo "<select class=\"mdl-textfield__input\" name=\"id_train\" id=\"id_train\"><option></option>";

while($ligne=$result->fetch_assoc()){
    $id=$ligne['id'];
    echo "<option value='$id'>$id</option>";

}
echo "</select>";
$mysqli->close();
