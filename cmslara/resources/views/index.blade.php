<?php
use routes\web;
use App\Http\Controllers\userController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('faculty') }}">Faculty Page</a> <br><br>
    <a href="{{ route('infra') }}">Infra Page</a> <br><br>
    <a href="hod.php">Hod Page</a> <br><br>
    <a href="manager_dash.php">Manager Page</a> <br><br>
    <a href="complaint.php">Principal Page</a> <br><br>
    <a href="login.php">Worker Page</a> <br><br>
</body>

</html>
