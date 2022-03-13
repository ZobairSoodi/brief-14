<?php include 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
<?php include 'navbar.php' ?>
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
                <form action="confirm_order.php?id=<?php echo $_GET["id"] ?>" method="POST">
                    <div class="buy-part">
                        <input type="submit" value="BUY NOW" class="buy-button">
                        <div class="control-part">
                            <button type="button" onclick="change_quantity('minus')" class="num-control"><img src="../images/minus.png"></button>
                            <input type="number" name="quantity" value="1" id="unics-num">
                            <button type="button" onclick="change_quantity('plus')" class="num-control"><img src="../images/plus.png"></button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <div id="other-products">
        <h4>Sponsored items customers also bought</h4>
        <div id="recomanded-products">
            <a href="#" class="recomanded-products">
                <img src="../images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="../images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="../images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>
            <a href="#" class="recomanded-products">
                <img src="../images/t.jpg">
                <h3>maneater mascara</h3>
                <h3>270 DH</h3>
            </a>

        </div>
    </div>
    <script src="../js/product-details.js"></script>
</body>
</html>