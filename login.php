<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <?php
    include("assets/includes/links.php");
    ?>

    <style>
      .formBox{
        box-shadow: 0px 0px 5px grey;
      }
      .img{
        width:100px;
        text-align:center;
        margin:0 35%;
      }
    </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 formBox mt-4 p-4 mx-auto">
        <img src="assets/images/dhanuk.jpg" alt="" class="img">
        <br>
        <br>
        <form action="" method="post">
          <label for="">Email:</label>
          <input  class="form-control" type="email" name="" id="">
          <label for="">Password:</label>
          <input class="form-control" type="password" name="" id="">
          <br>
          <input type="submit" value="LogIn" class='btn'>
        </form>
        <br>
        <p>Don't Have account yet ? Register <a href="register.php">here</a> <br> Forget password ? Click <a href="forget-password.php">here</a> to reset password</p>
      </div>
    </div>
  </div>
</body>
</html>