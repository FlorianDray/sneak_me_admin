<?php 

class Color {
    private $_id;
    private $_name;

    public function __construct() {
    }

    public function GetId() {
        return $this->_id;
    }
    public function GetName() {
        return $this->_name;
    }

    private function GetCouleurById($id) {
        try {
            $bdd_sneak = new PDO('mysql:host=localhost;dbname=sneak_me', 'root', 'root');
            print 'Connecté' . '</br>';
        } catch (PDOException $e) {
            print 'Error !:' . $e->getMessage() . '</br>';
            die();
        }

        $query = $dbInfo->prepare('SELECT c.id_couleur, c.label FROM couleurs c WHERE c.id_couleur=' . $id);
        $query->execute();
        $couleur = $query->fetch();

        var_dump($couleur);
    }

    

}



?>