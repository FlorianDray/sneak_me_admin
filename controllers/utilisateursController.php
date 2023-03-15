<?php
class UtilisateursController
{

    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        require './models/Utilisateurs.php';
        $utilisateur = new Utilisateurs(1, 'Toto');
        var_dump($utilisateur);
        require './views/utilisateursView.php';
    }
}