<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="script.js"></script>
    <form id="form">
        <div class="box">
            <input type="text" placeholder="Enter Name" class="input" name="username" id="name"required onchange="nameCheck()"> 
            <p id="erroruser" class="errormsg"></p>
            <p><input type="password" placeholder="Enter Password" class="input" name="password" id="pass" onchange= "passwordCheck()" required>
            <p><input type="password" placeholder="Confirm Password" class="input" name="confpass" id="confpass" onchange= "passwordCheck()" required>
            <p id="errorpass" class="errormsg"></p>
            <p class="aligned"><input type="button" value="Sign Up" class="button" id="button" onclick="submitCheck()"></p>
            <p class="text">Already have an account?
            <br/><a href="index.php"target="_self" class="redir">Login</a></p>
        </div>
    </form>
</body>