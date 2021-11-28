<!DOCTYPE html>
<?php
    require 'common.php';
?>
<html>
    <head>
	<style>
            body{
                background: url("images/back.jpg");
                background-size: cover;
                
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" charset="UTF-8" content="width=device-width,initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            include 'common/header.php';
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-3">
                    <form class="box" role="form" action="login_validation.php" method="POST">
                        <h1>LOGIN</h1>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <button type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container" style="alignm">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-3">
                    <form class="box" action="registration.php" method="POST">
                        <h1>SIGN UP</h1>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <button type="submit" name="submit">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>