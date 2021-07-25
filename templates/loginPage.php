<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/maidicon.ico">
    <title>Login Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/loginPage.css">
</head>
<body>
    <!-- Left Side -->
    <div id="mainBox" class="container mt-4">
        <div class="row">
            <div class="col pt-5">
                <h1 class="display-4 title">So what are you waiting for?</h1>
                <p class="mt-4 lead">Login to our app and hire the maid easily and instantly...</p>
                <br>
                <!-- Forms -->
                <form action="./loginValidate.php" method="POST">
                    <div class="container mt-4">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><ion-icon name="call-outline"></ion-icon></span>
                            </div>
                            <input required type="text" class="form-control" name="mobile" maxlength="10" placeholder="Mobile Number">
                        </div>
                        <br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            </div>
                            <input required type="password" class="form-control loginInputs" name="passwd" placeholder="Password">
                        </div>

                        <small class="float-right mb-4">Don't have an account? <a href="./signupPage.php">Create Now</a></small>
                        <input type="submit" class="btn form-control submitbtn" value="L O G I N">
                    </div>
                </form>
                <br>
            </div>
            <div class="col">
                <img src="../images/loginPage.jpg" width="470" alt="Login Image">
            </div>
        </div>
    </div>
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>