<?php 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/control_user.php" method="get">
        <input type="text" name="email" placeholder="Type your Email">
        <button type="submit" name="find">Find</button>
    </form>
<div class="output"><span><?php ?></span></div>
</body>
</html>