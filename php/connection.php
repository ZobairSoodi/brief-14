<?php
    $conn = new mysqli("localhost", "root", "", "brief14");
    if(isset($_POST["signup_submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email_signup"];
        $pass = $_POST["pass_signup"];
        $pass_confirm = $_POST["pass_confirm"];
        $phone = $_POST["phone"];
        $adress = $_POST["adress"];
        $sql = "SELECT * FROM client WHERE email = $email;";
        $data = $conn->query($sql);
        $res = $data->fetch_assoc();
        if(empty($res)){
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