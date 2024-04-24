<?php 

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){




        $data = uploadImage("users", $_FILES['image']);

        if ($data['errors'] === false) {


            $name = $data['result'];

      

            $query = "INSERT INTO `users`(`name`, `email`, `password`, `address`,`mobile`,`description`,`image` )
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]','$_POST[address]','$_POST[mobile]','$_POST[description]','$name') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:view_user.php");
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




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">




        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-plus text-success"></i> Add User</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./view_user.php" class="btn btn-success text-white"><i class="fa fa-eye"></i> View User</a>
            </div>

            <div class="form-container">
                <form action="<?php $_SERVER['PHP_SELF']?>"method="POST" enctype="multipart/form-data" class="row">

                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name">Name <span class="text-success">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="unit_price">Email <span class="text-success">*</span>
                        </label>
                        <input type="email" class="form-control" id="unit_price" name="email"  placeholder="Enter here..." required>
                    </div>



                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="category">Password <span class="text-success">*</span>
                        </label>
                        <input type="password" class="form-control" id="unit_price" name="password"  placeholder="Enter here..." required>

                    </div>



                    <div class="col-lg-4 ">
                        <label class="form-label" for="quantity">Image <span class="text-success">*</span>
                        </label>
                        <input type="file" class="form-control" id="quantity"  name="image" placeholder="Enter here..." required>
                    </div>

                    
                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="image">Mobile <span class="text-success">*</span>
                        </label>
                        <input type="integer" class="form-control" id="image" name="mobile" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="image">Address <span class="text-success">*</span>
                        </label>
                        <input type="text" class="form-control" id="image" name="address" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-success">*</span>
                        </label>
                        <textarea name="description" class="form-control" id=""  rows="5"></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-success text-white btn-lg mt-2 w-100"> <i class="fa fa-plus" name="submit" value="login"></i> Add User</button>
                    </div>

                </form>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>