<?php

class FormClient {

    private $datas = [];
    private $errors= [];


    public function __construct($datas) {
        $this->datas = $datas;
    }

    private function checkField($name) {
        if ( empty ( trim($this->datas[$name]) ) ) {
            $this->errors[$name] = $name;
        }
    }

    public function getAllFields() {
        foreach($this->datas as $nameField => $valueField) {
            $this->checkField($nameField);
        }
    }

    function displayErrors() {
        echo '<p class="alert alert-danger">Les champs suivants comportent des erreurs : ' .  implode(" | ",$this->errors) . '</p>';
    }

    public function keepFieldValue($name) {
        if(isset($this->datas[$name]))
        return $this->datas[$name];
    }

    public function isValidEmail($name) {
        if( !filter_var($this->datas[$name], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$name] = "mail invalide"; 
        }
    }

    function formIsValid () {
        if( empty($this->errors) ) {
            return true;         
        }
        
        else return false;
    }
}

?>