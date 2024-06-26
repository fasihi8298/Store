<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>view user</title>

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
            <h3> <i class="fa fa-eye text-success"></i> View User</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./add_user.php" class="btn btn-success text-white"><i class="fa fa-plus"></i> Add User</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Image</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Role</th>
                    
                            
                        </tr>
                    </thead>
                    <tbody>


                    <?php  
                    
                    require_once("./db-con.php");
                    
                    $get = "SELECT *  FROM users ";
              
                    $result = mysqli_query($con , $get);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){


                    ?>

                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['password'] ?></td>
        
                            <td><img src="./images/users/<?= $row['image'] ?>" height="50px" alt=""></td>                            <td><?= $row['mobile'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><span class="badge bg-success text-white p-1"><?=$row['role'] ?></span></td>
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




</body>

</html>