<?php

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){




        $data = uploadImage("product", $_FILES['image']);

        if ($data['errors'] === false) {


            $name = $data['result'];

      

            $query = "INSERT INTO `products`(`name`, `unit_price`, `category_id`, `quantity`, `image`, `description`) 
            VALUES ('$_POST[name]','$_POST[unit_price]' ,'$_POST[category]','$_POST[quantity]','$name','$_POST[description]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:products.php");
            }
            else{
                echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
            }
        }
        else{
            
          echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";

        }

    exit;
}


?>