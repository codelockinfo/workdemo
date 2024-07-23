<?php
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="jquery.js"></script>
</head>

<body>

    <form method="POST" id="updateform">
     <table>
         <div class="form">
             <h2>form</h2>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

             <div class="form_input top">
                 name:<br><input type="text" id="name" name="name">
             </div>
             <div class="form_input">
                 email:<br> <input type="email" id="email" name="email">
             </div>
             <div class="form_input">
                 password:<br><input type="password" id="password" name="password">
             </div>
             <div class="form_input">
                 <button type="submit" id="update_btn" class="btn btn-primary  save">save</button>
             </div>
         </div>
     </table>
 </form>
</body>

</html>
<script>
    $(document).ready(function() {
        var id = <?php echo $id; ?>;
        fetchdata(id);

    });
</script>