<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login form</title>
</head>
<style>
#card {
        background: #a6f77b;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 510px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}
#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
      
}
</style>
<body class="bg-success">
<div class="p-3 mb-2 text-white">
<div id="card-content">
  <div id="card-title"><h2 class="text-center">LOGIN</h2><br>
    <div class="underline-title"></div>
  </div>
  <div class="container">
            <form action="login.php" method="post">
                <div class="form-group">
                <label for="exampleInputEmail1">login</label><br>
                <input type="text" class="form-control" name="login" id="exampleInputlogin1" aria-describedby="loginHelp" placeholder="Masukkan akun">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary" name="btnclick">Login!</button>
            </form>
        </div>
    </div>
  </center>
  </div>
</body>

</html>

<!------------------------php code ------------------------>

<?php

if (isset($_POST["btnclick"])) {

    $login_id = $_POST["login"];
    $password = $_POST["password"];

    $_SESSION["status"] = false;

    //condition for checking valid input from user

    if ($login_id == "ubhara" && $password == "1234") {

        $_SESSION["login"] = $login_id;
        $_SESSION["status"] = true;
        header("Location: home.php");
    }
    if ($login_id == "login" && $password == "12345") {

        $_SESSION["login"] = $login_id;
        $_SESSION["status"] = true;
        header("Location: about.php");
    } else {
        echo "invalid credentials";
    }
}

?>