<?php
ob_start();

include_once 'header.php';
$con= mysqli_connect("localhost","root","","demo");
if(isset($_GET['id'])) {
  $id = $_GET['id'];
   $sel = "select* from employe where id=".$id;
 $sel_query = mysqli_query($con,$sel);
 $data=mysqli_fetch_assoc($sel_query);
 
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email =$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact']; 
    $address=$_POST['address'];

  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $sql="update employe set name='$name',email='$email',password='$password',contact='$contact',address='$address' where id= $id";
    
  }else
  {

  
    $sql="insert into employe(name,email,password,contact,address)values('$name','$email','$password','$contact','$address')";
  }
    mysqli_query($con,$sql);
    header("Location:employe.php");
    exit;
    ob_end_flush();
     }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="employe.php">employe</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo @$data['name']?>">
                    <span class="error">enter name..! <?php echo @$nameErr;?></span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"  value="<?php echo @$data['email']?>">
                    <span class="error">enter email...! <?php echo @$emailErr;?></span>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  value="<?php echo @$data['password']?>">
                    <span class="error">enter password...! <?php echo @$passwordErr;?></span>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">contact</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputPassword1" placeholder="contact"  value="<?php echo @$data['contact']?>">
                    <span class="error">enter contact...! <?php echo @$contactErr;?></span>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">addresss</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address"  value="<?php echo @$data['address']?>">
                    <span class="error">enter address...! <?php echo @$addressErr;?></span>

                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
           
                  <input type="submit" name="submit" class="btn btn-primary" value="submit">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
            <!-- /.card -->

            
            <!-- /.card -->

            <!-- Input addon -->
           
            <!-- /.card -->
            <!-- Horizontal Form -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
           
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include'footer.php';
 ?>