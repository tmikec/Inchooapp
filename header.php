<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Search results.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css.css">
    
    </head>
    <body>

        <header>
        <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span><img src="img/logo.png" width="10%" height="10%" alt="Logo"></span>
                </a>
                </div>
            <nav class="navbar navbar-default">
                <ul text-align="right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                
                </ul>
                <div namespace="form">
                <?php
                    if(isset($_SESSION['userId']))
                    {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                            </form>';
                    }
                   else
                   {
                    echo '<form action="includes/login.inc.php" method="post">

                    <input type="text" name="mailuid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>

                </form>
                <a namespace="signup" href="signup.php">Signup</a>';
                   }
                ?>
                
                

                </div>
            </nav>
        </header>