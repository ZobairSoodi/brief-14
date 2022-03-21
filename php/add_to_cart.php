<?php
  session_start();
  include 'conn.php';
  if( isset($_SESSION["first_add"]) && $_SESSION["first_add"]==true){
    $product_exist = false;
    if(!isset($_SESSION["cart"])){
      $_SESSION["cart"] = [];
    }
      foreach ($_SESSION["cart"] as $key => $value) {
        if(isset($_SESSION["cart"][$key]->id_product)){
          if($_SESSION["cart"][$key]->id_product==$_GET["id"]){
            $_SESSION["cart"][$key]->quantity += $_GET["quantity"];
            $product_exist = true;
            $_SESSION["first_add"] = false;
          }
        }
    }
    if($product_exist == false){
      $obj = (object) ["id_product"=>$_GET["id"],"quantity"=>$_GET["quantity"]];
      array_push($_SESSION["cart"], $obj);
      $_SESSION["first_add"] = false;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Document</title>
</head>
<body>
    

    <section class="intro">
        
        <div class="gradient-custom-1 h-100">
            <div class="firstdiv">
                <p>Free shipping on any $35 purchase</p>
            </div>
            <?php include 'navbar.php' ?>
            <!-- <nav style="position:sticky !important;">
              <div>
                  <div>
                      LOGO
                  </div>
                  <div>
                      <ul>
                          <li>Home</li>
                          <li>Products</li>
                      </ul>
                  </div>
              
              </div>
          </nav> -->
          
            <h1 style="text-align: center; margin-top: 70px; color: #522D6D;">MY CART <i class="fa-solid fa-cart-shopping-fast"></i></h1>

          <div class="mask d-flex align-items-center h-100">
              
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="table-responsive bg-white">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">Photo</th>
                          <th scope="col">Label</th>
                          <th scope="col">Price</th>
                          <th scope="col">Units</th>
                          <th scope="col">Sub total</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $total = 0;
                        foreach ($_SESSION["cart"] as $value) {
                          $sql = "SELECT * FROM produit WHERE idProduit = ".$value->id_product;
                          $data = $conn->query($sql);
                          $res = $data->fetch_assoc();
                          $total+=$res["prix"]*$value->quantity;
                      ?>
                        <tr>
                          <td scope="row"><img src="<?php echo $res["image"] ?>" alt=""></td>
                          <td><?php echo $res["libelle"]; ?></td>
                          <td><?php echo $res["prix"]; ?>$</td>
                          <td>    
                        <div class="control-part">
                            <button class="num-control"><img src="../images/minus.png"></button>
                            <input type="text" value="<?php echo $value->quantity ?>" id="unics-num">
                            <button class="num-control"><img src="../images/plus.png"></button>
                        </div>
                      </td>
                          <td><?php echo $res["prix"]*$value->quantity ?></td>
                          <td><a href="remove_from_cart.php?id=<?php echo $res["idProduit"] ?>">X</a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                          TOTAL: <?php echo $total; ?>$
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div id="container">
            <div id="part1">
                <div id="companyinfo"> <a id="sitelink" href="#"  style="color: black;">Contact Us</a>
                    <p id="title" style="color: black;">Cool and Perfect Snippet code</p>
                    <p id="detail" style="color: black;">We create awesome code snippets that will help you in creating your own beautiful site. </p>
                </div>
                <div id="explore">
                </div>
                <div id="visit">
    
    
                </div>
                <div id="legal">
                  
                </div>
                <div id="subscribe">
                    <p id="txt4" style="color: black;">Subscribe to US</p>
                    <form> <div id="Message"> <input id="email" type="email" placeholder="Email"> <br> <textarea rows="4" cols="21" name="comment"> </textarea> </div> <div id="information"> <input id="email" type="email" placeholder="Email"> <input id="email" type="email" placeholder="Email">  <input id="Submit" type="submit" value="Submit" ></div> </form> <a class="waves-effect waves-light btn"></a>
                </div>
            </div>
            <div id="part2">
                <p id="txt6"  style="color: black; text-align: center;" ><i class="material-icons tiny"> copyright</i>copyright 2019 BBbootstrap - All right reserved</p>
            </div>
        </div>
    </footer>
    
</body>
</html>