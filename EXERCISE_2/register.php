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
    <link rel="stylesheet" href="stylesheets/register.css">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Sign up to create account</title>
</head>
<body>
    
    <div class="container mt-5 text-center">
        <div class="sign-up-form mt-n4">
            
            <div class="form-header">
                <span><img src="https://img.icons8.com/nolan/100/edit-user-male.png"/></span>
                <h2>Create Account</h2>
                <p>Sign up to create account</p>
            </div>

            <form action="login.php" method="post">
                <div class= "container input">
                    <div class= "row">
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user" style="font-size:30px" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="first_name" required autocomplete="off" placeholder="Enter First name" class="form-control">
                        </div>
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user" style="font-size:30px" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="last_name" required autocomplete="off" placeholder="Enter Last name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-sm-offset-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-address-card" style="font-size:30px" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" name="address" required autocomplete="off" placeholder="Enter Address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope" style="font-size:25px" aria-hidden="true"></i></span>
                            </div>
                            <input type="email" name="email" required autocomplete="off" placeholder="Enter email address" class="form-control">
                        </div>
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope" style="font-size:25px" aria-hidden="true"></i></span>
                            </div>
                            <input type="email" name="confirm_email" required autocomplete="off" placeholder="Confirm email address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key" style="font-size:25px" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" name="password" required placeholder="Enter password" class="form-control">
                        </div>
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key" style="font-size:25px" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" name="Confirm_password" required placeholder="Confirm password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="input-group ml-4 mt-n4">
                    <label class="checkbox-inline">
                        <input type="checkbox" required> I accept the <a href="#">Terms of Use</a>
                        &amp;
                        <a href="#">Privacy Policy</a>
                    </label>
                </div>
                <div class= "text-center">
                    <button type="submit" class="btn btn-lg" name="register">Create Account</button>
                </div>
            </form>
                <p style="color:black" class="text-center mt-4">Already have an account? <a href="login.php"><b>Click Here</b></a></p>  
        </div>
    </div>
</body>
</html>