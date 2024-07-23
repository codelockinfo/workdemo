<?php
$con= mysqli_connect("localhost","root","","ajaxlogin");
session_start();
if(isset($_SESSION['userid']))
{
  header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <style>
 .error {color: #FF0000;}
 input{
    width: 340px;
    padding-bottom: 3px;
    margin-bottom: 20px;
 }
</style>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="jquery.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
   
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <span id="valid"></span>
      <form  method="post" id="index_fm">
        <div>
           <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <span id="emailerr" style="color: red;"></span>
          <div>
        <div>
          
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span id="passworderr" style="color: red;"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            
          <button type="submit" id="index" class="btn btn-primary btn-block">Sign In</button>

          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
