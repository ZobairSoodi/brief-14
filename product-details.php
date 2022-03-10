<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="category-list">
        <p>#1SELLER</p>
        <p>NEW</p>
        <p>SALE</p>
        <p>MAKEUP</p>
        <p>AWAKE</p>
        <p>SKINCARE</p>
    </div>
    <div class="product-details">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "brief14";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            $sql = "SELECT * FROM produit WHERE idProduit = ".$_GET["id"].";";
            $data = $conn->query($sql);
            $res = $data->fetch_assoc();
        ?>
        <img src="<?php echo $res["image"] ?>" id="product-image">
        <div id="lable-area">
            <h2><?php echo $res["libelle"] ?></h2>
            <h1><?php echo $res["prix"] ?> DH</h1>
            <h4>Product details</h4>
            <p id="dt"><?php echo $res["description"] ?></p>
                <div class="buy-part">
                    <button class="buy-button"><p>BUY NOW</p></button>
                    <div class="control-part">
                        <button class="num-control"><img src="images/minus.png"></button>
                        <input type="text" id="unics-num">
                        <button class="num-control"><img src="images/plus.png"></button>
                    </div>
                </div>
        </div>
    </div>
    <div id="other-products">
        <h4>Sponsored items customers also bought</h4>
        <div id="recomanded-products">
            <a href="#" class="recomanded-products">
                <img src="images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>

        </div>
    </div>
</body>
</html>