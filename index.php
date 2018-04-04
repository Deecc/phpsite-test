<?php 
    session_start();
    require 'lib/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>Decio Casagrande</title>
</head>
<body class="container">

    <div class="header"> <?php include ('header.php'); ?>  </div>   
    <div class="container"> <?php include ('content.php'); ?>  </div>
    <div class="footer"> <?php include ('footer.php'); ?>  </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>