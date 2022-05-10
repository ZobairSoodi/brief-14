<?php include 'conn.php' ?>
    <nav>
        <div>
            <div>
                <img src="../images/logo.png">
            </div>
            <div>
                <ul>
                    <li>Home</li>
                    <li><a href="products-list.php">Products</a></li>
                </ul>
            </div>
            <div>
                <span>
                    <?php
                        if(isset($_SESSION["user_id"])){
                            $user = $_SESSION["user_id"];
                            $sql = "SELECT * FROM Client WHERE idClient = $user";
                            $data = $conn->query($sql);
                            $res = $data->fetch_assoc();
                            echo $res["nom"]." ".$res["prenom"];
                        }
                    ?>    
                <i class="fa-solid fa-user"></i></span>
                <span><i class="fa-solid fa-cart-shopping"></i></span>
            </div>
        </div>
    </nav>
    <!-- <img style="width: 100%;" src="../charming-woman-with-curly-hairstyle-make-up-studio 2.png" alt=""> -->
