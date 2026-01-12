<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    //validate Name
    if (empty($name)) {
        echo "Name is required.<br>";
    }else {
        $name = htmlspecialchars($name);
        echo "Name:" .$name . "<br>";
    }
    //validate email
    if (empty($email)) {
        echo "email is required. <br>";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "invalid email format.<br>";
    }else {
        $email = htmlspecialchars($email);
        echo "Email:" .$email. "<br>";
    }
    //validate password
    if (empty($password)) {
        echo "password is required.<br>";
    }elseif (strlen($password)<6) {
        echo "password must be atleast 6 characters long.<br>";
    }else {
        echo "password accepted.<br>";
    }
}

?>