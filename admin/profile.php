<?php
session_start();
require_once "./db-con.php";

if (!isset($_SESSION['login'])  || $_SESSION['login'] == false) {
    header("location: login.php");
}

$sel_sql = "SELECT * FROM users WHERE id='$_SESSION[user_id]' ";
$exists = mysqli_query($con, $sel_sql);


$row = mysqli_fetch_assoc($exists);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>



    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./add_user.php"><button class="btn btn-success text-white">Add users</button></a></li>
                    <li class="breadcrumb-item "><a href="./view_user.php"><button class="btn btn-danger">View User</button></a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid ">

            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center ">
                                <img class="mr-3 rounded-circle" src="./images/profile.png" width="130px" height="130px" alt="">
                                <div class="media-body ms-5">
                                    <h3 class="mb-0"><?= $row['name'] ?></h3>
                                    <p class="text-muted mb-0"><?= $row['role'] ?></p>
                                </div>
                            </div>




                            <h4 class="mt-3">About Me</h4>
                            <p class="text-muted">Hi, I'm <span><?= $row['name'] ?></span></p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong><?= $row['mobile'] ?></span></li><br>
                                <li><strong class="text-dark mr-4">Email</strong> <?= $row['email'] ?></span></li><br>
                                <li><strong class="text-dark mr-1">Address</strong> <?= $row['address'] ?></span></li>

                            </ul>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>



    </div>



    </div>
    </div> <!--*** Main wrapper end *****-->




    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>
</body>

</html>