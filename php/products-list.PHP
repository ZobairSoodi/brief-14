<?php include 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Document</title>
    <style>
        body{
    margin: 0;
    padding: 0;
}
#container {
    width: 100%;
    height: 330px
}

#part1 {
    width: 100%;
    height: 280px;
    background-color: #ffffff
}

#part2 {
    width: 100%;
    height: 50px;
    background-color: #CABFB3;
    position: relative;
    top: -15px
}

#companyinfo {
    width: 14%;
    height: 280px;
    position: relative;
    left: 8%;
    top: 30px
}

#sitelink {
    font-size: 35px;
    color: #f44336
}

#sitelink:hover {
    color: #e65100
}

#title {
    color: gray;
    position: relative;
    top: 0px;
    font-size: 14.1px
}

#detail {
    color: #aaa7a7;
    font-size: 16px
}

#explore {
    width: 14%;
    height: 280px;
    position: relative;
    top: -235px;
    left: 29%
}

#txt1,
#txt2,
#txt3,
#txt4,
#txt5 {
    color: white;
    font-size: 20px
}

.link {
    display: flex;
    width: 90px;
    height: 40px;
    color: #aaa7a7;
    background-color: transparent;
    border-top: 2px solid white;
    position: relative;
    top: -10px
}

.link:hover,
.link1:hover {
    color: #e65100
}

#visit {
    width: 14%;
    height: 280px;
    position: relative;
    top: -515px;
    left: 42%
}

.text {
    color: #aaa7a7;
    font-size: 14px;
    margin-top: -10px
}

#legal {
    width: 14%;
    height: 280px;
    position: relative;
    top: -800px;
    left: 59.5%
}

.link1 {
    display: flex;
    width: 150px;
    height: 40px;
    color: #aaa7a7;
    background-color: transparent;
    border-top: 2px solid white;
    position: relative;
    top: -10px;
    margin-top: 7px
}

#subscribe {
    position: relative;
    top: -1080px;
    left: 78%;
    width: 14%;
    height: 280px
}

#email {
    color: white;
    position: relative;
    top: -20px
}

.btn {
    position: relative;
    top: -10px
}

#txt5 {
    position: relative;
    top: 0px
}

.social {
    position: relative;
    top: -5px;
    margin-right: 10px;
    color: white;
    cursor: pointer
}

.fa-facebook-square:hover {
    color: #3B579D
}

.fa-linkedin:hover {
    color: #007BB6
}

.fa-twitter-square:hover {
    color: #2CAAE1
}

#txt6 {
    color: white;
    position: relative;
    top: 13px;
    left: 8%;
    width: 80%;
    color: #aaa7a7
}

.material-icons {
    position: relative;
    top: 3px
}

@media only screen and (max-width:1000px) {
    #companyinfo {
        width: 20%
    }

    #sitelink {
        font-size: 30px
    }

    #txt5,
    #txt4 {
        font-size: 17px
    }

    #txt5,
    .social {
        position: relative;
        top: -5px
    }
}

@media only screen and (max-width:850px) {
    #companyinfo {
        position: relative;
        left: 3%
    }

    #txt6 {
        position: relative;
        left: 3%
    }

    #txt1,
    #txt2,
    #txt3,
    #txt4,
    #txt5 {
        font-size: 15px
    }

    #explore {
        position: relative;
        top: -240px;
        left: 26%
    }

    #sitelink {
        font-size: 25px
    }

    #detail {
        font-size: 13px
    }

    .link {
        width: 60px
    }

    #visit {
        position: relative;
        top: -520px;
        left: 37%
    }

    .text {
        font-size: 13px
    }

    #legal {
        position: relative;
        top: -800px;
        left: 54%
    }

    #subscribe {
        position: relative;
        top: -1080px;
        left: 76%;
        width: 20%
    }

    #txt5,
    .social {
        position: relative;
        left: -110%;
        top: px
    }

    #email,
    .btn {
        position: relative;
        top: 0px
    }

    #part1 {
        height: 250px
    }
}

#Submit{
    width: 170px;
    background-color: #949191af;
    border: none;
    height: 40px;
    cursor: pointer;
}
#Submit:hover{
    background-color:#94919146;

}
#subscribe{
    margin-top: -15px;
}
#Message{
    margin-left: -230px;
}
#information{
    margin-top: -100px;
}
#email{
    height: 25px;
    margin: 2px;
}
form input{
border: none;
background-color: #94919169;

}
textarea{
    background-color: #94919173;
    border: none;

}


.intro {
  height: 100%;
}

.gradient-custom-1 {
  /* fallback for old browsers */
  background: #cd9cf2;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, #F5F5F5, #F5F5F5);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, #F5F5F5, #F5F5F5)
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
tbody td {
  font-weight: 500;
  color: #999999;
}


.firstdiv{
    background-color: #B8A898;
}
.firstdiv p{
    text-align: center;
}

td img {
    width: 70px;
}
.num-control img {
    width: 25px;
}
.num-control {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 25px;
    height: 25px;
}

#unics-num {
    width: 40px;
    height: 40px;
}
.control {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.control-part {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;

}
.control-part button {
    background-color: transparent;
    border: 1px solid #C4C4C4;
    margin: 0px 10px;
}
.control-part input {
    border: 1px solid #C4C4C4;
}
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <header>
        <img src="../images\background.png">
    </header>
    <main> 
        <div class="best-seller-area">
            <p>Best Sellers</p>
            <div class="best-seller-photos">
                <div>
                    <img src="../images\t.jpg">
                    <div>></div>
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="../images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
                <div>
                    <img src="../images\t.jpg">
                    <p>here the product name</p>
                    <p>price</p>
                </div>
            </div>
        </div>
        <div class="pub">

        </div>
        <div class="our-product">
        <p>Our Product</p>
        <div class="our-product-photo">
        
        <?php
            
            $sql = "SELECT * FROM produit LIMIT 6;";
            $data = $conn->query($sql);
            while($res = $data->fetch_assoc()){
                echo "
                <div>
                    <a href="."product-details.php?id=".$res["idProduit"]."".">
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

    

