<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21/01/2018
 * Time: 14:24
 */
equire_once "Modeles/modele.php";

class FAQ extends Modele
{


    public function enregistrerQuestion($enregistrerQuestion)
    {
        $sql = "INSERT INTO question (question) VALUES ('$enregistrerQuestion[0]')";
        $resultatrequete = $this->executerRequete($sql);
        return $resultatrequete;
    }

}
?>