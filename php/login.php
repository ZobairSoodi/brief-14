<?php
    session_start(); 
    function show_error($er){
        if(isset($_SESSION[$er]) && $_SESSION[$er]!=""){
            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
            echo $_SESSION[$er];
            echo "</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="form_parent">
        <div id="form_btns">
            <button id="login_btn" onmouseover="add_button_hover(this)" onmouseout="remove_button_hover(this)">LOGIN</button>
            <button id="signup_btn" onmouseover="add_button_hover(this)" onmouseout="remove_button_hover(this)" class="form_inactive_signup">SIGN UP</button>
        </div>
        <div id="forms_div">
            <form id="login_form" action="connection.php" method="POST">
                <div>
                    <label for="email_login">Email</label><input type="text" id="email_login" name="email_login" placeholder="Enter your email">
                </div>
                <div>
                    <label for="pass_login">Password</label><input type="text" id="pass_login" name="pass_login" placeholder="Enter your password">
                </div>
                <input type="submit" name="login_submit" value="LOG IN">
            </form>
            <form id="signup_form" action="connection.php" method="POST">
                <div class="is_double_input">
                    <label for="fname">First Name 
                    <span>
                        <?php
                        if(isset($_SESSION["error_fname"]) && $_SESSION["error_fname"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_fname"];
                            echo "</span>";
                        }
                    ?></span>
                    </span></label><input type="text" name="fname" id="fname" placeholder="First Name" required minlength="8">
                </div>
                <div class="is_double_input">
                    <label class="second_input" for="lname">Last Name
                    <span>
                        <?php
                        if(isset($_SESSION["error_lname"]) && $_SESSION["error_lname"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_lname"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input class="second_input" type="text" name="lname" id="lname" placeholder="Last Name" minlength="8">
                </div>
                <div>
                    <label for="email_signup">Email
                    <span>
                        <?php
                        if(isset($_SESSION["error_email"]) && $_SESSION["error_email"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_email"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input type="email" name="email_signup" id="email_signup" placeholder="Email">
                </div>
                <div>
                    <label for="pass_signup">Password
                    <span>
                        <?php
                        if(isset($_SESSION["error_pass"]) && $_SESSION["error_pass"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_pass"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input type="password" name="pass_signup" id="pass_signup" placeholder="Password" minlength="8">
                </div>
                <div>
                    <label for="pass_confirm">Confirsm Password
                    <span>
                        <?php
                        if(isset($_SESSION["error_pass_confirm"]) && $_SESSION["error_pass_confirm"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_pass_confirm"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirsm Password">
                </div>
                <div class="is_double_input">
                    <label for="phone">Phone Number
                    <span>
                        <?php
                        if(isset($_SESSION["error_phone"]) && $_SESSION["error_phone"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_phone"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input type="text" name="phone" id="phone" placeholder="Phone Number">
                </div>
                <div class="is_double_input">
                    <label class="second_input" for="adress">Adress
                    <span>
                        <?php
                        if(isset($_SESSION["error_adress"]) && $_SESSION["error_adress"]!=""){
                            echo "<i class='fa-solid fa-triangle-exclamation'></i><span class='error_hover'>";
                            echo $_SESSION["error_adress"];
                            echo "</span>";
                        }
                    ?></span>
                    </span>
                    </label><input class="second_input" type="text" name="adress" id="adress" placeholder="Adress">
                </div>
                <div>
                    <input type="submit" name="signup_submit" value="SIGN UP">
                </div>
            </form>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>