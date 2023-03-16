<?php

require "./controllers/marquesController.php";

class View {
    public function showMarques($marques) {
        // Affichage des marques dans un tableau HTML

        echo "<table>";
        foreach ($marques as $marques) {
            echo "<tr><td>" . $marques['id'] . "</td>" . $marques['nom'] . "</td></tr>";
        }
        echo "</table>";
    }
}

// $maMarque = new Marques(1, "Nike");
