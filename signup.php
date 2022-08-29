<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if ($_GET['user'] == "already"){
            echo "<script>alert('Username already taken')</script>";
        } else if ($_GET['user'] == "pwerror"){
            echo "<script>alert('Both passwords must match')</script>";
        }
    ?>
    <form method="post" action="confirm_signup.php">
        <div class="box">
            <input type="text" placeholder="Enter Name" class="input" name="username" required>
            <p><input type="password" placeholder="Enter Password" class="input" name="password" required>
            <p><input type="password" placeholder="Confirm Password" class="input" name="confpass" required>
            <p class="aligned"><input type="submit" value="Sign Up"class="button"></p>
            <p class="text">Already have an account?
        <br/><a href="index.html"target="_self" class="redir">Login</a></p>
        </div>
    </form>
</body>