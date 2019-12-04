<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Autotag App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/imagen_corp/nsign500x500.png">
    <style>
        body, html {
            height:100%;
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .bg {
            background-color: white;
            height:100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
</head>

<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class=".col-md-6 offset-md-3 rounded" style="margin: auto; background-color: #2c2c2c; padding: 20px; box-shadow: 10px 10px 5px #888;">
            <div class="panel-heading">
                <h2>Autotag App</h2>
                <p style="font-style: italic;">WebApp developed by NetipBox</p>
            </div>
            <hr>
            <form action="check.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" accept="image/*" class="form-control-lg"  placeholder=".form-control-lg">
                <br><hr><br>
                <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-danger" onclick=loader()>Analyse Image</button>
            </form>
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-danger m-5" style="display:none;" role="status" id="loader">
                  <span class="sr-only">Loading...</span>
                </div>
            </div>
            <script>
            function loader() {
              document.getElementById("loader").style.display = "block";
            }
            </script>
        </div>
        </div>
    </div>


</body>
</html>