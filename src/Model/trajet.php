<?php

/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/2/2016
 * Time: 6:28 PM
 */
class trajet
{

    private $id;
    private $ville_depart;
    private $ville_arrivee;
    private $depart;
    private $arrivee;
    private $longeur;
    private $nombre_de_arret;
    private $retard;
    private $billets;
    private $id_train;

    /**
     * @return mixed
     */
    public function getBillets()
    {
        return $this->billets;
    }

    /**
     * @param mixed $billets
     */
    public function setBillets($billets)
    {
        $this->billets = $billets;
    }

    /**
     * trajet constructor.
     */

    public function __construct()
    {
    }
    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->ville_depart;
    }

    /**
     * @param mixed $ville_depart
     */
    public function setVilleDepart($ville_depart)
    {
        $this->ville_depart = $ville_depart;
    }

    /**
     * @return mixed
     */
    public function getIdTrain()
    {
        return $this->id_train;
    }

    /**
     * @param mixed $id_train
     */
    public function setIdTrain($id_train)
    {
        $this->id_train = $id_train;
    }

    /**
     * @return mixed
     */
    public function getVilleArrivee()
    {
        return $this->ville_arrivee;
    }

    /**
     * @param mixed $ville_arrivee
     */
    public function setVilleArrivee($ville_arrivee)
    {
        $this->ville_arrivee = $ville_arrivee;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return mixed
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * @param mixed $arrivee
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;
    }

    /**
     * @return mixed
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * @param mixed $longeur
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;
    }

    /**
     * @return mixed
     */
    public function getNombreDeArret()
    {
        return $this->nombre_de_arret;
    }

    /**
     * @param mixed $nombre_de_arret
     */
    public function setNombreDeArret($nombre_de_arret)
    {
        $this->nombre_de_arret = $nombre_de_arret;
    }


    /**
     * @return mixed
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * @param mixed $retard
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;
    }
    public function afficher_list_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("SELECT ville_depart,depart,arrivee,longeur,nombre_d_arret,billets,ville_arrivee,id_train FROM Trajet;");
        while($ligne=$result->fetch_assoc()){
            $ville_depart=$ligne['ville_depart'];
            $ville_arrivee=$ligne['ville_arrivee'];
            $depart=$ligne['depart'];
            $arrivee=$ligne['arrivee'];
            $longeur=$ligne['longeur'];
            $nombre_d_arret=$ligne['nombre_d_arret'];
            $billets=$ligne['billets'];
            $id_train=$ligne['id_train'];
            echo "<tr>
                    <td class=\"mdl-data-table__cell--non-numeric\">$ville_depart</td>
                    <td>$ville_arrivee</td>
                    <td>$depart</td>
                    <td>$arrivee</td>
                    <td>$longeur</td>
                    <td>$nombre_d_arret</td>
                    <td>$billets</td>
                    <td>$id_train</td>
                </tr>";

        }
        $mysqli->close();
    }
    public function afficher_list_trajet_admin(){
        require "connecte_db.php";
        $result=$mysqli->query("SELECT id,ville_depart,ville_arrivee,longeur,retard,depart,arrivee,nombre_d_arret,billets,id_train FROM Trajet;");
        while($ligne=$result->fetch_assoc()){
            $id=$ligne['id'];
            $ville_depart=$ligne['ville_depart'];
            $ville_arrivee=$ligne['ville_arrivee'];
            $longeur=$ligne['longeur'];
            $retard=$ligne['retard'];
            $depart=$ligne['depart'];
            $arrivee=$ligne['arrivee'];
            $nombre_d_arret=$ligne['nombre_d_arret'];
            $billets=$ligne['billets'];
            $train=$ligne['id_train'];
            echo "<tr>
                    <td class=\"mdl-data-table__cell--non-numeric\">$id</td>
                    <td>$ville_depart</td>
                    <td>$ville_arrivee</td>
                    <td>$depart</td>
                    <td>$arrivee</td>
                    <td>$retard</td>
                    <td>$longeur</td>
                    <td>$nombre_d_arret</td>
                    <td>$billets</td>
                    <td>$train</td>
                </tr>";

        }
        $mysqli->close();
    }
    public function afficher_list_trajet_recherche(){
        require "connecte_db.php";
        $result=$mysqli->query("SELECT ville_depart,depart,arrivee,longeur,nombre_d_arret,billets,ville_arrivee,id_train FROM Trajet WHERE ville_depart='$this->ville_depart' AND ville_arrivee='$this->ville_arrivee' AND depart='$this->depart' AND arrivee='$this->arrivee'");
        if(mysqli_num_rows($result)>0)
        {echo "<table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\" style=\"width: 100%\">
                <thead>
                <tr>
                    <th class=\"mdl-data-table__cell--non-numeric\">ville de depart</th>
                    <th>ville d'arrivee</th>
                    <th>Depart</th>
                    <th>Arrivee</th>
                    <th>Longeur</th>
                    <th>Arret</th>
                    <th>Billets</th>
                    <th>Train</th>
                </tr>
                </thead>
                <tbody>";
            while($ligne=$result->fetch_assoc()){
            $ville_depart=$ligne['ville_depart'];
            $ville_arrivee=$ligne['ville_arrivee'];
            $depart=$ligne['depart'];
            $arrivee=$ligne['arrivee'];
            $longeur=$ligne['longeur'];
            $nombre_d_arret=$ligne['nombre_d_arret'];
            $billets=$ligne['billets'];
            $id_train=$ligne['id_train'];
            echo "<tr>
                    <td class=\"mdl-data-table__cell--non-numeric\">$ville_depart</td>
                    <td>$ville_arrivee</td>
                    <td>$depart</td>
                    <td>$arrivee</td>
                    <td>$longeur</td>
                    <td>$nombre_d_arret</td>
                    <td>$billets</td>
                    <td>$id_train</td>
                </tr>";
        }
            echo "</tbody>
            </table>";
        }
        else{
            echo " <p style=\"margin-left:9%;\">Aucune résultat... choisissez une solution..</p>
                        <p id = 'mapdiv' style=\"width: 100%;margin-top: 10%;margin-left: 7%\"></p>";
        }

        $mysqli->close();
    }
    public function modifier_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("UPDATE trajet SET ville_depart = '$this->ville_depart',ville_arrivee = '$this->ville_arrivee', Longeur = '$this->longeur', nombre_d_arret = '$this->nombre_de_arret', depart = '$this->depart', arrivee = '$this->arrivee', retard = '$this->retard', billets = '$this->billets',id_train='$this->id_train' WHERE id = '$this->id';");
        if($result)
        {
            echo'<script>alert("Modification de trajet faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Modification a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_trajet.php\'</script>';
        $mysqli->close();
    }

    public function insert_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("INSERT INTO trajet VALUES(NULL ,'$this->ville_depart','$this->ville_arrivee','$this->longeur','$this->nombre_de_arret','$this->depart','$this->arrivee','non','$this->billets','$this->id_train');");
        if($result)
        {
            echo'<script>alert("Creation de trajet faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Creation a échoué");</script>';
        }
        echo '<script>document.location.href
        =\'../../../View/admin/gestion_trajet.php\'</script>';
        $mysqli->close();
    }
    public function supprimer_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("DELETE FROM trajet WHERE id='$this->id'");
        if($result){
            echo'<script>alert("Suppression de trajet faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Suppression a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_trajet.php\'</script>';
        $mysqli->close();
    }

}