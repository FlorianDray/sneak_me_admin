<?php

class Marques {
    private $_id;
    private $_label;

    public function __construct($id, $label) {
        $this->_id = $id;
        $this->_label = $label;
    }

    public function getId(){
        return $this->_id;
    }

    public function getLabel(){
        return $this->_label;
    }
}


?>