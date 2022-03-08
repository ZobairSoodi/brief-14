<?php
    $conn = new mysqli("localhost", "root", "", "brief14");
    $error = 0;
    
    if(isset($_POST["signup_submit"])){
        $fname = $_POST["fname"];
        $error_fname = "";
        $lname = $_POST["lname"];
        $error_lname = "";
        $email = $_POST["email_signup"];
        $error_email = "";
        $pass = $_POST["pass_signup"];
        $error_pass = "";
        $pass_confirm = $_POST["pass_confirm"];
        $error_pass_confirm = "";
        $phone = $_POST["phone"];
        $error_phone = "";
        $adress = $_POST["adress"];
        $error_adress = "";
        $sql = "SELECT * FROM client WHERE email = $email;";
        $data = $conn->query($sql);
        $res = $data->fetch_assoc();
        if(empty($res)){
            if(preg_match("/[a-zA-Z]/", $fname)){
                $error_fname = "fname error";
            }
            if(preg_match("/\w+@gmail\.com/", $email)){
                return true;
            }
            $sql = "INSERT INTO client (`prenom`, `nom`, `email`, `pass`, `telephone`, `adresse`) VALUES('$fname','$lname','$email','$pass','$phone','$adress')";
            $conn->query($sql);
        }
        else{
            header("location:")
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