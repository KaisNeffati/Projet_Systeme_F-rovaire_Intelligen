<?php

/**
 * Created by PhpStorm.
 * User: Kais NEFFATI
 * Date: 4/30/2016
 * Time: 11:34 PM
 */
class utilisateur
{
    private $nom;
    private $prenom;
    private $cin;
    private $login;
    private $mots_d_passe;
    private $date_d_naissance;
    private $tel;
    private $access;

    /**
     * utilisateur constructor.
     */
    public function __construct()
    {
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getMotsDPasse()
    {
        return $this->mots_d_passe;
    }

    /**
     * @param mixed $mots_d_passe
     */
    public function setMotsDPasse($mots_d_passe)
    {
        $this->mots_d_passe = $mots_d_passe;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param mixed $access
     */
    public function setAccess($access)
    {
        $this->access = $access;
    }

    /**
     * @return mixed
     */
    public function getDateDNaissance()
    {
        return $this->date_d_naissance;
    }

    /**
     * @param mixed $date_d_naissance
     */
    public function setDateDNaissance($date_d_naissance)
    {
        $this->date_d_naissance = $date_d_naissance;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function connecte(){
        require "connecte_db.php";
        $result= $mysqli->query("SELECT login,mots_d_passe,access FROM utilisateur WHERE login='$this->login' AND mots_d_passe='$this->mots_d_passe'");
        $nbr=mysqli_num_rows($result);
        if ($nbr>0)
        {
            while($ligne=$result->fetch_assoc()){
                session_start();
                $_SESSION['connected']=TRUE;
                if ($ligne['access']=="full_access")
                {
                    header('Location: ../View/admin/Accueille_admin.php');
                }
                ELSE{
                    header('Location: ../View/utilisateur/Accueille_utilisateur.php');
                }
            }

        }
        ELSE{
            header('Location: ../../index.php');
        }
        $mysqli->close();

    }
    public function afficher_list_utilisateur(){
        require "connecte_db.php";
        $result=$mysqli->query("SELECT nom,prenom,cin,login,mots_d_passe,date_d_naissance,tel,access FROM utilisateur;");
        while($ligne=$result->fetch_assoc()){
            $nom=$ligne['nom'];
            $prenom=$ligne['prenom'];
            $cin=$ligne['cin'];
            $login=$ligne['login'];
            $mots_d_passe=$ligne['mots_d_passe'];
            $date_d_naissance=$ligne['date_d_naissance'];
            $tel=$ligne['tel'];
            $access=$ligne['access'];
            echo "<tr>
                    <td class=\"mdl-data-table__cell--non-numeric\">$nom</td>
                    <td>$prenom</td>
                    <td>$cin</td>
                    <td>$login</td>
                    <td>$mots_d_passe</td>
                    <td>$date_d_naissance</td>
                    <td>$tel</td>
                    <td>$access</td>
                </tr>";

        }
        $mysqli->close();
    }
    public function insert_utilisateur(){
        require "connecte_db.php";
        $result=$mysqli->query("INSERT INTO utilisateur VALUES('$this->nom' ,'$this->prenom','$this->cin','$this->login','$this->mots_d_passe','$this->date_d_naissance','$this->tel','$this->access');");
        if($result)
        {
            echo'<script>alert("Creation de utilisateur faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Creation a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_utilisateur.php\'</script>';
        $mysqli->close();
    }
    public function modifier_utilisateur(){
        require "connecte_db.php";
        $result=$mysqli->query("UPDATE utilisateur SET nom = '$this->nom',prenom = '$this->prenom', cin = '$this->cin', mots_d_passe = '$this->mots_d_passe', date_d_naissance = '$this->date_d_naissance', tel = '$this->tel', Access = '$this->access' WHERE login = '$this->login';");
        if($result)
        {
            echo'<script>alert("Modification de utilisateur faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Modification a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_utilisateur.php\'</script>';
        $mysqli->close();
    }
    public function supprimer_utilisateur(){
        require "connecte_db.php";
        $result=$mysqli->query("DELETE FROM utilisateur WHERE login='$this->login'");
        if($result){
            echo'<script>alert("Suppression de utilisateur faite par succès");</script>';
        }
        ELSE{
            echo'<script>alert("Suppression a échoué");</script>';
        }
        echo '<script>document.location.href=\'../../../View/admin/gestion_utilisateur.php\'</script>';
        $mysqli->close();
    }
    public function deconnecter(){
        session_start();
        $_SESSION['connected']=array();
        session_destroy();
        header('Location: ../../index.php');
    }

}