<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Test</title>
    <link rel="stylesheet" href="style.css">
    <!-- code by https://github.com/brunomonteirobonifacio -->
</head>
<body>
    <div class="box">
        <form method="post" action="confirm_login.php">
            <input type="text" placeholder="Enter Name" class="input" name="username" required>
            <p><input type="password" placeholder="Enter Password" class="input" name="password" required>
            <p  class="aligned"><input type="submit" value="Login"class="button"></p>
        </form>
        <p class="text">Don't have an account?
        <br/><a href="signup.php?user=null"target="_self" class="redir">Sign Up</a></p>
    </div>
</body>
</html>