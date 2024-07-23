<?php
include_once 'header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="jquery.js"></script>
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
                                <li class="breadcrumb-item"><a href="view_employe.php">employe</a></li>
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
                                <form method="post" id="updateform">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <label>name</label>
                                            <input type="name" name="name" id="name" class="form-control" placeholder="Enter name">

                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">


                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">


                                        </div>
                                        <div class="form-group">
                                            <label>contact</label>
                                            <input type="text" name="contact" id="contact" class="form-control" placeholder="contact">


                                        </div>
                                        <div class="form-group">
                                            <label>addresss</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="address">


                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer"></div>
                                    <div class="form_input">
                                        <button type="submit" id="update_btn" class="btn btn-primary  save">save</button>
                                    </div>

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
    include 'footer.php';
    ?>
    <script>
        $(document).ready(function() {
            var id = <?php echo $id; ?>;
            fetchdata(id);

        });
    </script>