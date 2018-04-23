<?php

$error = '';
function CheckUserInput($data) { return $data; };

if(isset($_POST['submit'])) {
    if(empty($_POST['username'])) {
        $error = 'Username is required';
    } else {
        $username = CheckUserInput($_POST['username']);
    };
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/css/styles.css">
    <title>Simple sign up and login</title>
</head>
<body>
<h1 class="title">Form validation with PHP</h1>
<form method="POST" class="form">
    <p class="username-wrap">
        <label for="username">Username<span class="form_red">*</span> <?php echo $error; ?></label>
        <input type="text" placeholder="Username" name="username" id="username" class="form__username">
     </p>
    <p class="password-wrap">
        <label for="password">Password<span class="form_red">*</span></label>
        <input type="password" placeholder="Password" name="password" id="password" class="form__password">
    </p>
    <p class="password-wrap">
        <label for="password">Password Confirmation<span class="form_red">*</span></label>
        <input type="password" placeholder="Password Confirmation" name="password_conf" id="password_conf" class="form__password">
    </p>
    <p class="gender-wrap">
        <label for="gender">Gender<span class="form_red">*</span></label>
        <input type="radio" name="gender">Man
        <input type="radio" name="gender">Woman
    </p>
    <p class="website-wrap">
        <label for="website">Website<span class="form_red">*</span></label>
        <input type="text" placeholder="Website" name="website" id="website" class="form__password">
    </p>
    <p class="comment-wrap">
        <label for="comment">Comment<span class="form_red">*</span></label>
        <textarea placeholder="Comment" name="comment" id="comment" class="form__password textarea"></textarea>
    </p>
    <p class="button-wrap">
        <input type="submit" name="submit" class="form__button" value="Submit your information">
    </p>
</form>

</body>
</html>