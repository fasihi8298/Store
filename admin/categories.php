<?php

require_once("./db-con.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $category = $_POST['category'];

    $data = uploadImage("categories", $_FILES['image']);

    if ($data['errors'] === false) {

        $name = $data['result'];
        $query = "INSERT INTO categories VALUES(null, '$category', '$name') ";

        if (!mysqli_query($con, $query)) {
            die("query failed");
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Categories - Home</title>

    <!-- css-links include -->
    <?php require_once "./includes/css-links.php" ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">


        <!-- add category container -->
        <div class="container mt-3 bg-white p-4">

            <h3> <i class="fa fa-plus text-success"></i> Add Category</h3>
            <hr>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="row">

                <div class="col-lg-4">
                    <label class="form-label" for="val-username">Category <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="val-username" name="category" placeholder="Enter here..." required>
                </div>


                <div class="col-lg-4">
                    <label class="form-label" for="userimage">Category Image <span class="text-danger">*</span>
                    </label>
                    <input type="file" class="form-control" id="userimage" name="image" accept="image/*" required>
                </div>


                <div class="col-lg-4">
                    <label for=""></label>

                    <button class="btn btn-success text-white btn-lg mt-2 w-100"><i class="fa fa-plus"></i> Add Category</button>
                </div>

            </form>

            <?php if (isset($data) && $data['errors'] === true) { ?>
                <div class="alert alert-danger mt-2 uploadingErr"><?php echo $data['result'] ?></div>
            <?php } ?>


            <?php if (isset($data) && $data['errors'] === false) { ?>
                <div class="alert alert-success mt-2 uploadingErr"> <b>Congratulations! </b> Operation Performed Successfully...</div>
            <?php } ?>

        </div>



        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-eye text-success"></i> View Categories</h3>
            <hr>


            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $select = "SELECT * FROM categories";
                        $result = mysqli_query($con, $select);

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {


                        ?>
                                <tr>
                                    <td><?php echo $row['category'] ?></td>
                                    <td><img src="./images/categories/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Link 1</a>
                                                <a class="dropdown-item" href="#">Link 2</a>
                                                <a class="dropdown-item" href="#">Link 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                        <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".uploadingErr").hide();
            }, 3000);

        })
    </script>


</body>

</html>