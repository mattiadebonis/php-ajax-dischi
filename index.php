<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi di Mattia De Bonis</title>
    <!-- css -->
    <link rel="stylesheet" href="style/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <h1 class="titolo-pagina">Album del mese</h1>
    </header>
    <main>

        <ul id="cards">        
            <?php 
                include __DIR__ . "/partial/database.php";
            
                foreach ($dischi as $chiaveDisco => $disco) {

            ?>
            <!-- card disco -->
            <li class="card">
                <?php 
                        echo("<img class='immagine-disco' src='" . $disco["copertina"]. "' />");

                        echo("<h2>".$disco["titolo"]."</h2>");
                        echo("<h3>".$disco["autore"]."</h3>");
                        echo("<h4>".$disco["anno"]."</h4>");
                        echo("<h5>".$disco["genere"]."</h5>");
                ?>
            </li>
            <!-- /card disco -->
            <?php 
            } 
            ?>
        </ul>
    </main>
    <footer>
        
    </footer>
    
    
</body>
</html>