<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="jquery.js"></script>

</head>

<body>
    <form method="POST" id="myfrm">
        <table>
            <div class="form">
                <h2>form</h2>
                <div class="form_input top">
                    <br><input type="text" id="name" name="name" placeholder="name">
                </div>

                <div class="form_input">
                    <br> <input type="email" id="email" name="email" placeholder="email">
                </div>
                <div class="form_input">
                    <br><input type="password" id="password" name="password" placeholder="password">

                </div>


                <div class="form_input">
                    <button type="submit" id="button" class="btn btn-primary  save">save</button>

                </div>

            </div>
        </table>
    </form>

    <table id="result" border="2" class="table table_f">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>


            </tr>
        </thead>

        <tbody class="result">


        </tbody>

    </table>



</body>

</html>
<script>
    $(document).ready(function() {

        getdata();
    })
</script>