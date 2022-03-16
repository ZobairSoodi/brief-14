<?php
    if(isset($_POST["add_to_cart"])){
        header("location: add_to_cart.php?id=".$_GET['id']."&quantity=".$_POST["quantity"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="order.php?id=<?php echo $_GET["id"] ?>" method="post">
        use a different adress ?
        <label for="yes_radio">Yes</label><input name="adress_radio" id="yes_radio" type="radio" value="yes" onclick="adress_click(this)">
        <label for="no_radio">No</label><input name="adress_radio" id="no_radio" type="radio" value="no" checked onclick="adress_click(this)"><br>
        <Label>New Adress:</Label><input type="text" name="new_adress" id="new_adress" readonly><br>
        <label for="quantity">Quantity:</label><input type="text" name="quantity" value="<?php echo $_POST["quantity"] ?>" readonly>
        <input type="submit">
    </form>
    <script src="../js/confirm_order.js"></script>
</body>
</html>