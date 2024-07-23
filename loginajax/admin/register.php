
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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="jquery.js"></script>
<style>
 .error {color: #FF0000;}
 input{
    width: 340px;
    padding-bottom: 3px;
    margin-bottom: 20px;
 }
 #contact_er{
  margin-bottom: 20px;
 }
</style>
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

      <form  method="POST" id="register_fom">
      <div class="input-group mb-3 ">
            <input type="text"  name="name" placeholder="name">
            <div><span id="nameerr" style="color: #FF0000;"></span></div>
            <span class="error" ></span>
        </div>
        <div class="input-group mb-3">
          <input type="email"  name="email" id="email" placeholder="Email">
          <span id="emailerr" style="color: #FF0000;"></span>
        
        </div>
        <div class="input-group mb-3">
          <input type="password"  name="password" id="password" placeholder="Password">
          <span id="passworderr" style="color: #FF0000;"></span>
        </div>
        <div class="input-group mb-3">
          <input type="contact"  name="contact" id="contact" placeholder="contact">
          <span id="contact_er" style="color: #FF0000;"></span>

         
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
          
            
            <button type="submit" id="register" name="submit" class="btn btn-primary btn-block ">Sign In</button>
          
          </div>
          
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      
     
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
