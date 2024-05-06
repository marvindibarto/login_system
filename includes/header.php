<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="includes/bootstrap/css/style.css">
</head>
<body>
    <h1>LOGIN SYSTEM IN PHP</h1>

    <?php
        if(isset($_GET['noentry'])){
            $noentry_message = $_GET['noentry'];
            echo "<h4>".$noentry_message."</h4>";
        }
    ?>

    <div class="container">