<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>Hello!</title>
</head>
<body>
    <form method="post" id="loginForm" >
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        setcookie('username', $_POST['username']);
        header('Location: php/storePage.php');
    }
    ?>
    <a href="php/storePage.php">Store</a>
    <script src="js/script.js"></script>
</body>
</html>