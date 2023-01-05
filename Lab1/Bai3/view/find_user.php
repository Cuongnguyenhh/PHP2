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
<style>form {
        font-family: sans-serif;
        width: 50%;
        margin: auto;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        border: 1px solid #ccc;
        font-size: 16px;
        padding: 12px 20px;
        width: 100%;
    }

    button[type="submit"] {
        background-color: #4caf50;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 16px;
        padding: 16px 32px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }


    .output{
        font-family: sans-serif;
        width: 50%;
        margin: auto;
    }
    .output>span{
        font-family: sans-serif;
        margin: auto;
        font-weight: bolder;
        margin-left: 14rem;
        color: #39a5ee;
    }
    .output>h3{
        font-family: sans-serif;
        margin: auto;
        font-weight: bolder;
        margin-left: 14rem;
        color: #39a5ee;
    }
</style>
    <form action="../Controller/control_user.php" method="get">
        <label for="search-input">Search:</label>
        <input type="text" id="search-input" name="search-input" placeholder="Type your Email">
        <button type="submit" name="find">Find</button>
    </form>
<div class="output"><span><?php ?></span>
<?php if(isset($_GET['find'])){
    $name=$info['firstname']."".$info['lastname'];
    echo "<span>Your name is: $name </span>";
}?>
</div>
</body>
</html>