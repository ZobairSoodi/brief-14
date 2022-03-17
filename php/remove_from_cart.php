<?php
    session_start();
    for($i=0;$i<count($_SESSION["cart"]);$i++){
        if($_SESSION["cart"][$i]->id_product==$_GET["id"]){
            unset($_SESSION["cart"][$i]);
        }
    }
    header("location: add_to_cart.php");
?>