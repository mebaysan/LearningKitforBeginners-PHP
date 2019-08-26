<?php
// htmlentities(); // zararlı sayılabilecek stringleri (js kodları vs.) süzer ve zararsız hale getirir
function clean($string)
{
    return htmlentities($string);
}

function redirect($location)
{
    return header("Location:{$location}");
}

function set_message($message)
{
    if (!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = "";
    }
}

function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function token_generator()
{
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
}

function validation_errors($error_message)
{
    $error_message = <<<DELIMITER
    <div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    <strong>Warning!</strong> $error_message
</div>
DELIMITER;
    return $error_message;

}

function email_exists($email)
{
    $sql = "select id from users where email = '$email'";
    $result = query($sql);
    if (row_count($result) == 1) {
        return true;
    } else {
        return false;
    }
}

function username_exists($username)
{
    $sql = "select id from users where username = '$username'";
    $result = query($sql);
    if (row_count($result) == 1) {
        return true;
    } else {
        return false;
    }
}


/**************  Validation Functions  ************/
function validate_user_registration()
{
    $errors = [];
    $min = 3;
    $max = 20;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first_name = clean($_POST['first_name']);
        $last_name = clean($_POST['last_name']);
        $username = clean($_POST['username']);
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['confirm_password']);

        if (strlen($first_name) < $min) {
            $errors[] = "<div class='alert alert-danger'>Your first name cannot be less than {$min} characters</div>";
        }
        if (strlen($first_name) > $max) {
            $errors[] = "<div class='alert alert-danger'>Your first name cannot be more than {$max} characters</div>";
        }
        if (empty($first_name)) {
            $errors[] = "<div class='alert alert-danger'>Your first name cannot be empty</div>";
        }
        if(email_exists($email)){
            $errors[] = "<div class='alert alert-danger'>Sorry this email is registered!</div>";
        }
        if(username_exists($username)){
            $errors[] = "<div class='alert alert-danger'>Sorry this username is registered!</div>";
        }
        if (strlen($last_name) < $min) {
            $errors[] = "<div class='alert alert-danger'>Your last name cannot be less than {$min} characters</div>";
        }
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo validation_errors($error);
            }
        }

    }
}