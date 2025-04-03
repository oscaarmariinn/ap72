<?php
require_once "autoloader.php";
$connection = new Conexion();
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
                echo "<h2>PDO example</h2>";
                
                $pdo = $connection->getConn();

                $insert = "INSERT INTO Person(id, name) VALUES (111, 'NombrePrueba1')";
                $pdo->exec($insert);
                
                $stmt = $pdo->prepare("INSERT INTO Person(id, name) VALUES (:id, :name)");
                $id = 222;
                $name = "NombrePrueba2";
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->execute();

                $query = 'SELECT * FROM Person';
                $stmt = $pdo->query($query);
                
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>id</th><th>name</th></tr></thead>';
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    foreach ($row as $element) {
                        echo '<td>' . htmlspecialchars($element) . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </body>
</html>
