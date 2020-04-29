<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>
<h1>Your order summary</h1>
<p>Thank you for ordering {{ @SESSION.food }} for {{ @SESSION.meal }}</p>
</body>
</html>