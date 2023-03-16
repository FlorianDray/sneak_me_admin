<?php
class UtilisateursController
{

    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        require './models/User.php';
        $userManager = new User();
        $users = $userManager->getAllUsers();
        require './views/users_view.phtml';
    }
}