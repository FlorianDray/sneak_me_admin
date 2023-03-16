<?php 
     require '.configuration/DBConnection.php';
     require '.models/Marques.php';


class Controller {
    public function getMarques() {
        $model = new DBConnection();
        $conn = $model->connect();

        // Requête SQL pour récupérer toutes les marque de la table "marques"
        $sql = "SELECT * $ FROM marques";
        $result = $conn->query($sql);

        // Traitment des résultats de la requête SQL 
        
        $marques = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $marques[] = $row;
            }
        }

        // Retourne les marques sous forme de tableau

        return $marques;

    }
}