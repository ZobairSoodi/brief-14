<?php
    session_start();

    include 'conn.php';
    
    $quantity = $_POST["quantity"];
    $id_product = $_GET["id"];
    $idClient = $_SESSION["user_id"];
    $adress = "";

    
    $sql_client = "SELECT * FROM client WHERE idClient = $idClient";
    $data = $conn->query($sql_client);
    $res = $data->fetch_assoc();
    if(isset($_POST["new_adress"]) && $_POST["new_adress"]!=""){
        $adress = $_POST["new_adress"];
    }
    else{
        $adress = $res["adresse"];
    }

    $sql_insert_order = "INSERT INTO commande (`idClient`, `date`, `adresseLivraison`)
        VALUES ($idClient, '".date("Y-m-d")."', '".$adress."');
    ";
    echo $sql_insert_order;
    $conn->query($sql_insert_order);

    $order_id = $conn->insert_id;
    $sql_insert_details = "INSERT INTO detailscommande VALUES (
        $order_id, $idClient, $quantity
    );";
    $conn->query($sql_insert_details);
    header("location: products-list.php");
?>