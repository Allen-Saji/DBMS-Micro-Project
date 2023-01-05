<?php include 'config/database.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="libs/css/styles.css">
</head>

<body>
    <div class="container-login">
        <div class="login-page">
            <div class="form-header">
                <h1 class="login-h1">Login</h1>
                <h4 class="login-h4">Inventory Management System</h4>
            </div>
            <form action="login.php" method="post">
                <div class="label">
                    <label for="username">Username</label>
                </div>
                <div class="input">
                    <input type="text" name="username" placeholder="Enter Username" size="40">
                </div>
                <div class="label">
                    <label for="password">Password</label>
                </div>
                <div class="input">
                    <input type="password" name="password" placeholder="Enter Password" size="40">
                </div>

                <input type="submit" name="submit">
            </form>
        </div>

    </div>
</body>

</html>