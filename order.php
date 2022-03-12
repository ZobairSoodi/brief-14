<?php
    $quantity = $_POST["quantity"];
    $idClient = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brief14";
            
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql_client = "SELECT * FROM client WHERE idClient = $idClient";
    $data = $conn->query($sql_client);
    $res = $data->fetch_assoc();

    $sql_insert_order = "INSERT INTO commande (`idClient`, `date`, `adresseLivraison`)
            VALUES ($idClient, '".date("Y-m-d")."', '".$res["adresse"]."')
    ";
    echo $sql_insert_order;
    // $conn->query($sql_insert_order);
?>