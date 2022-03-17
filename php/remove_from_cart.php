<?php
    session_start();
    foreach ($_SESSION["cart"] as $key => $value) {
        echo $key."<br>";
    }
    // $_SESSION["cart"][3]->id_product;
    // for($i=0;$i<count($_SESSION["cart"]);$i++){
    //     if($_SESSION["cart"][$i]->id_product==$_GET["id"]){
    //         unset($_SESSION["cart"][$i]);
    //     }
    // }
    // header("location: add_to_cart.php");
    // $list = [
    //     "item1",
    //     "item2",
    //     "item3"
    // ];
    // for($i=0;$i<count($list);$i++){
    //         if($list[$i]=="item2"){
    //             unset($list[$i]);
    //         }
    //     }
    // foreach ($list as $value) {
    //     echo $value."<br>";
    // }
?>