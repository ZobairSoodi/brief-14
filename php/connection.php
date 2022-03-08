<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "brief14");    
    if(isset($_POST["signup_submit"])){
        $error = false;
        $fname = $_POST["fname"];
        $_SESSION["error_fname"] = "";
        $lname = $_POST["lname"];
        $_SESSION["error_lname"] = "";
        $email = $_POST["email_signup"];
        $_SESSION["error_email"] = "";
        $pass = $_POST["pass_signup"];
        $_SESSION["error_pass"] = "";
        $pass_confirm = $_POST["pass_confirm"];
        $_SESSION["error_pass_confirm"] = "";
        $phone = $_POST["phone"];
        $_SESSION["error_phone"] = "";
        $adress = $_POST["adress"];
        $_SESSION["error_adress"] = "";
        $_SESSION["email_exists_error"] = "";
        $sql = "SELECT * FROM client WHERE email = '$email';";
        $data = $conn->query($sql);
        $res = $data->fetch_assoc();
        if(empty($res)){
            if(!preg_match("/[a-zA-Z]{5,}/", $fname)){
                $_SESSION["error_fname"] = "Your firstname should contain only letters and should be 5 characters minimum!";
                $error = true;
            }
            if(!preg_match("/[a-zA-Z]{5,}/", $lname)){
                $_SESSION["error_lname"] = "Your lastname should contain only letters and should be 5 characters minimum!";
                $error = true;
            }
            if(!preg_match("/\w+@gmail\.com/", $email)){
                $_SESSION["error_email"] = "invalid email format!";
                $error = true;
            }
            if(!preg_match("/[a-zA-z0-9]{8,}/", $pass)){
                $_SESSION["error_pass"] = "Your password should contain letters AND numbers and should be 8 characters minimum!";
                $error = true;
            }
            if($pass != $pass_confirm){
                $_SESSION["error_pass_confirm"] = "Doesn't match the password above!";
                $error = true;
            }
            if(!preg_match("/[0-9]{10}/", $phone)){
                $_SESSION["error_phone"] = "phone number should contain 10 digits!";
                $error = true;
            }
            if(!preg_match("/[a-zA-Z0-9]*/", $adress)){
                $_SESSION["error_adress"] = "invalid adress format!";
                $error = true;
            }
            if($error == false){
                $sql = "INSERT INTO client (`prenom`, `nom`, `email`, `pass`, `telephone`, `adresse`) VALUES('$fname','$lname','$email','$pass','$phone','$adress')";
                $conn->query($sql);
            }
            header("location: login.php");
        }
        else{
            $_SESSION["email_exists_error"] = "Email already exists!";
            header("location: login.php");
        }
        
    }
    if(isset($_POST["login_submit"])){
        $email = $_POST["email_login"];
        $pass = $_POST["pass_login"];
        $sql = "SELECT * FROM client WHERE email = '$email' AND pass = '$pass';";
        $data = $conn->query($sql);
        $res = $data->fetch_assoc();
        if(!empty($res)){
            foreach ($res as $key => $value) {
                echo "$key = $value <br>";
            }
        }
        else{
            echo "User does not exist!";
        }
    }
?>