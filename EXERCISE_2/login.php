<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- LOCAL STYLESHEET -->
    <link rel="stylesheet" href="stylesheets/login.css">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Log in to your account</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="sign-up-form">
            <div class="form-header">
                <span><img src="https://img.icons8.com/nolan/100/user.png"/></span>
                <h2>Log in</h2>
                <p>Sign in to Your Account</p>
            </div>
            <form action="php/home.php" method="post">
            <!-- <span class="text-white ml-5 text-danger font-italic" style="font-size:1.2vw"></span> -->
                <div class="input-group col-sm-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope" style="font-size:25px" aria-hidden="true"></i></span>
                    </div>
                    <input type="email" name="email" required autocomplete="off" placeholder="Enter email address" class="form-control">
                    
                </div>
                <!-- <span class="text-white ml-5 text-danger font-italic" style="font-size:1.2vw"></span> -->
                <div class="input-group col-sm-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key" style="font-size:25px" aria-hidden="true"></i></span>
                    </div>
                    <input type="password" name="password" required placeholder="Enter password" class="form-control">
                </div>
                <div class="small ml-2"><b>Forgot Password?</b> <a href="#">Click Here</a></div>
                    <div class="mt-3">
                        <button type="submit" name="login" class="btn btn-default">Log in</button>
                    </div>
                    <p class="new-here"><b>New Here ?</b> <a href="register.php"><b>Create One</b></a></p>
            </form>   
        </div>
        
    </div>
</body>
</html>

<!-- 
<?php echo $error_email; ?>
<?php echo $error_password; ?> -->