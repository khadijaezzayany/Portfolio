<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    // $message="";

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: dashboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="dist/css/login.css">
    <!-- <link rel=" stylesheet" href="style.css"> -->
    <title>Document</title>
</head>

<body>
    <div class="header" id="headeLogin">

        <div class="header__nav" id="navbar">
            <a href="index.php"><img class="header__nav--logo" src="assets/logo.svg" alt=""></a>
            <ul><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
            </ul>
        </div>
    </div>
    <div class="container">

        <form method="post" action="">
            <div id="div_login">
                <h1>Space Administrator</h1>
                <div class="form_item">
                    <label for="username">Username:</label>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" required />
                </div>
                <div class="form_item">
                    <label for="passworrd">Password:</label>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" required />
                </div>
                <div class="form_item form_item--valid">
                    <input type="submit" value="VALIDATE" name=" but_submit" id="but_submit" />
                </div>

            </div>
        </form>

    </div>
</body>

</html>