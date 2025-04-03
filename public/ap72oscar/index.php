<?php
require_once "autoloader.php";
$connection = new Connection();
?>
<html>
    <head>
        <title>Welcome to LAMP Infrastructure</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>Hello, Welcome DAW Student!</h1>";
                echo "<h2>pdo example</h2>";

            ?>
        </div>
    </body>
</html>
