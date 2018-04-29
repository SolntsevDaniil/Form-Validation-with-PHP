<?php

class Account {

    private $errorArray;
    public function __construct() {
        $this->errorArray = array();
    }

    public function register($username, $email, $password1, $password2, $firstname, $lastname) {
        $this->validateUsername($username);
        $this->validateEmail($email);
        $this->validatePasswords($password1, $password2);
        $this->validateFirstName($firstname);
        $this->validateLastName($lastname);

        if(empty($this->errorArray) == true) {
            return true;
        } else { return false; };
    }

    public function getError($error) {
        if(!in_array($error, $this->errorArray)) {
            $error = '';
        };
        return `<span class="error error_message">{$error}`;
    }

    private function validateUsername($username) {
        if(strlen($username) > 25 || strlen($username) < 5) {
            array_push($this->errorArray, 'Your username must be between 5 and 25 characters');
            return;
        };
    }

    private function validateEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, 'Email is invalid');
            return;
        };
    }

    private function validatePasswords($password1, $password2) {
        if(!$password1 == $password2) {
            array_push($this->errorArray, 'Your passswords is not match');
            return;
        };

        if(preg_match('/[^A-Za-z0-9]/', $password1)) {
            array_push($this->errorArray, 'Your password can only contain numbers and letters');
            return;
        };

        if(strlen($password1) > 25 || strlen($password1) < 5) {
            array_push($this->errorArray, 'Your password must be between 5 and 25 characters');
            return;
        };
    }

    private function validateFirstName($firstname) {
        if(strlen($username) > 25 || strlen($username) < 2) {
            array_push($this->errorArray, 'Your first name must be between 2 and 25 characters');
            return;
        };
    }

    private function validateLastName($lastname) {
        if(strlen($username) > 25 || strlen($username) < 2) {
            array_push($this->errorArray, 'Your last name must be between 2 and 25 characters');
            return;
        };
    }
};

?>