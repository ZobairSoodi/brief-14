
<?php

?>
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
    <header>
        <img src="images\background.png">
    </header>
    <main> 
        <div class="best-seller-area">
            <p>Best Sellers</p>
            <div class="best-seller-photos">
                <div>
                    <img src="images\t.jpg">
                    <div>></div>
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
            </div>
        </div>
        <div class="pub">

        </div>
        <!-- <div class="our-product">
            <p>Our Product</p>
            <div class="our-product-photo">
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
            </div>
        </div> -->
        <div class="our-product">
        <p>Our Product</p>
        <div class="our-product-photo">
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "brief14";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            $sql = "SELECT * FROM produit LIMIT 6;";
            $data = $conn->query($sql);
            while($res = $data->fetch_assoc()){
                echo "
                <div>
                    <a href="."#".">
                    <img src='".$res["image"]."'>
                    <p>".$res["libelle"]."</p>
                    </a>
                    <p>".$res["prix"]."</p>
                </div>
                ";
            }
        ?>
            </div>
    </div>
    </main>
    <!-- <?php
 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "brief14";

 // Faire l'appel
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql = "SELECT libelle, description, prix, image  FROM produit";

$result = $conn->query($sql);

    if ($result->num_rows> 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>"."<td>". $row["libelle"]."</td>"."<td>". $row["description"]."</td>"."<td>". $row["prix"]."</td>"."<td>". $row["prix"]."</td>"."</tr>";
            // echo "<tr><td> " . $row["Matricule"]."</td>"."<td>". $row["Nom"]."</td>"."<td>". $row["Prénom"]."</td>"."<td>". $row["Date"]."</td>". "<td>". $row["Département"]."</td>"."<td>". $row["Salaire"]."</td>"."<td>". $row["Fonction"]."</td>"."<td>" . "<img src=".$row['Photo'].' width=100px height="100px">'."</td>"."<td>"."<button>Delete</button><button>Edite</button>"."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }


     ?> -->

    
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

    

