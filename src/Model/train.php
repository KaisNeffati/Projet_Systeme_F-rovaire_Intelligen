<?php

/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 5/3/2016
 * Time: 8:46 PM
 */
class train
{
    private $id;
    private $nom;
    private $marque;
    private $vitesse;
    private $place;

    /**
     * train constructor.
     */
    public function __construct()
    {
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
public function afficher_list_train(){
    require "connecte_db.php";
    $result=$mysqli->query("SELECT id,nom,marque,vitesse,place FROM train");
    while($ligne=$result->fetch_assoc()){
        $id=$ligne['id'];
        $nom=$ligne['nom'];
        $marque=$ligne['marque'];
        $vitese=$ligne['vitesse'];
        $place=$ligne['place'];
        echo "<tr>
                    <td class=\"mdl-data-table__cell--non-numeric\">$id</td>
                    <td>$nom</td>
                    <td>$marque</td>
                    <td>$vitese</td>
                    <td>$place</td>
                </tr>";

    }
    $mysqli->close();
}
    public function insert_train(){
        require "connecte_db.php";
        $result=$mysqli->query("INSERT INTO train VALUES(NULL ,'$this->nom','$this->marque','$this->vitesse','$this->place');");
        if($result)
        {
            echo'<script>alert("Creation de train faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Creation a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_train.php\'</script>';
        $mysqli->close();
    }
    public function modifier_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("UPDATE train SET nom = '$this->nom',marque = '$this->marque',vitesse = '$this->vitesse', place = '$this->place' WHERE id = '$this->id';");
        if($result)
        {
            echo'<script>alert("Modification de train faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Modification a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_train.php\'</script>';
        $mysqli->close();
    }
    public function supprimer_trajet(){
        require "connecte_db.php";
        $result=$mysqli->query("DELETE FROM train WHERE id='$this->id'");
        if($result){
            echo'<script>alert("Suppression de train faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Suppression a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_train.php\'</script>';
        $mysqli->close();
    }

}