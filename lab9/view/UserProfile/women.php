
<?php

require_once'../../model/dbconn.php';

$sql="SELECT * FROM users.inventory WHERE category='women'";

$all_product=$conn->query($sql);

?>



<html>
<head>
<style>
        
        
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
            display: inline-block;
        }

        
        
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
    //header file
    ?>
</body>

    <?php
    while($row = mysqli_fetch_assoc($all_product))
    {
        

        ?>
        <form action="../../controller/Product/addToCart.php" method="POST" >
        <div class="card">
        <img src="../../data/product/<?php echo $row["image"];?>" alt="">
        <p><?php echo $row["name"];?></p>
        <p><?php echo $row["Price"];?></p>
        <button type="submit">Add To Cart</button>
        </div>
    </form>
     
     
     <?php

    }
    ?>
   </body>
</html>