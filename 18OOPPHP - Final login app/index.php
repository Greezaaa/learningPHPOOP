<?php
    // we need
    // inc/autoloader.inc.php
    // classes/dbh.class.php
    // index.php
    
    include "inc/autoloader.inc.php";
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17OOPPHP - MVC Model</title>
    <link rel="stylesheet" href="./media/css/app.css">
</head>

<body>
    <main>
        <section>
            <div class="signUp">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet?Sign up here!</p>
                <form action="inc/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">

                    <button class=" btn btn-green bottom" type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="logIn">
                <h4>LOGIN</h4>
                <p>Don't have an account yet?Sign up here!</p>
                <form action="inc/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">

                    <button class="btn btn-orange bottom" type="submit" name="submit">LOGIN</button>
                </form>
            </div>

        </section>
    </main>
</body>

</html>