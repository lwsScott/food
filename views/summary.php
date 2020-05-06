<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank you</title>
    <include href="includes/header.html"></include>
</head>
<body>
<h1>Your order summary</h1>
<p>Thank you for ordering {{ @SESSION.food }} for {{ @SESSION.meal }}</p>

<a href="order">Place another order</a><br>
<a href="{{ @BASE }}">Home Page</a>
</body>
</html>