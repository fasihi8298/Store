<?php

require_once("./db-con.php");

if($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST['submit'] == "login"){

    
}

?>


<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
  <!-------------------------------------/>
        Preloader Start
  <------------------------------------->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
           Preloader Start
    <--------------------->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 ">
                <div class="col-xl-6 ">
                    <div class="form-input-content ">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 ">
                                <a class="text-center" href="index.html"> <h4>Login</h4></a>

                                <!-------login form ----->
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn btn-success text-white submit w-100" name="submit" value="login">Login <i class="fa-solid fa-right-to-bracket"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>
</body>
</html>





