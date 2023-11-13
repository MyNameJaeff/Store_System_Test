<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Page</title>
</head>
<body>
    <?php if ($_COOKIE['username'] != ""): ?>
        <?php
            echo("Hello! ". $_COOKIE["username"] ." and welcome to the store page!");
        ?>
    <?php endif; ?>
</body>
</html>