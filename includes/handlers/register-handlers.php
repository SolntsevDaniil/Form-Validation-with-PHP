<?php
require_once('/var/www/html/includes/classes/Account.php');
$account = new Account();

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(' ', '', $inputText);
    return $inputText;
};

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
};

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(' ', '', $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
};

if(isset($_POST['registerButton'])) {
    $username = sanitizeFormUsername($_POST['username']);
    $firstname = sanitizeFormString($_POST['firstName']);
    $lastname = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $password1 = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $email, $password1, $password2, $firstname, $lastname);
    if($wasSuccessful) {
        echo 'Registration was succsessful<br>';
    } else { echo 'Registration failed<br>'; }; 
};

?>