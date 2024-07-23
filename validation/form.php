<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation with Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
    <form id="myForm" method="post" action="submit.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <span id="username-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <span id="password-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
