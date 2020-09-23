<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>



<body>
    <h1>Homepage</h1>
    <aside class="aside">
        <ul class="asidebar">
            <a class="asidebar_item" href="dashboard.php">Accueil</a>
            <a class="asidebar_icon" href="dashboard.php">
                <i class="fa fa-home" aria-hidden="true"></i>
            </a>
            <hr>
            <a class="asidebar_item" href="projet.php">Projet</a>
            <a class="asidebar_icon" href="projet.php"><i class="fa fa-folder" aria-hidden="true"></i></a>
            <hr>
            <a class="asidebar_item asidebar_item--logout" href="../login.php">Logout</a>
            <a class="asidebar_icon " href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

        </ul>

    </aside>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
</body>

</html>