<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
       include __DIR__ . "/partial/database.php";
       
       foreach ($dischi as $chiaveDisco => $disco) {
            echo($disco["titolo"]);
            echo($disco["autore"]);
            echo($disco["anno"]);
            echo($disco["genere"]);
            echo($disco["copertina"]);

       } 
    ?>
    
</body>
</html>