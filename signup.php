
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="font-family:cursive;">

    <form action="" method="POST" class="container p-4 w-75"> 

        <div class="container bg-white w-50 mt-5 shadow p-3" >  
            <h2 class="text-center mt-2 mb-4 ">Signup form</h2> 

        <!-- name input -->

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">name:</label>
            <input type="text" class="form-control border border-success shadow-none mt-2 " id="email" placeholder="Enter username" name="name">
        </div>

        <!-- Email input -->


        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control border border-success shadow-none mt-2 " id="email" placeholder="Enter username" name="">
        </div>

        <!-- password input -->

        <div class="mt-4 mb-2">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control border border-success  shadow-none mt-2" id="pwd" placeholder="Enter password" name="password">
            <button type="submit" name="submit" class="mt-5 mb-4 btn btn-success text-white w-25">Submit</button>
        </div>

        </div>

    </form> 



</body>
</html>