<?php
require __DIR__ . '/arrays/db.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Object-oriented programming 1</title>
    <!-- AUTHOR -->
    <meta name="author" content="Samuele Benato" />
    <!-- DESCRIPTION -->
    <meta name="description" content="Organizzare oggetti, variabili d'istanza e costruttori" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>
    <!-- CSS LINK
    <link rel="stylesheet" href="./css/style.css" /> -->
    <!-- VUE 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- MY JS -->
    <script type="text/javascript" src="./js/main.js" defer></script>
</head>

</html>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <?php foreach ($movies as $movie): ?>
                    <div class="card">
                        <div class="card-body">
                            <h3>
                                <?php echo "Titolo: " . $movie->title . "<br>"; ?>
                            </h3>
                            <h4>
                                <?php echo "Regista: " . $movie->author . "<br>"; ?>
                            </h4>
                            <h6>
                                <?php echo "Anno: " . $movie->published_year . "<br>"; ?>
                            </h6>
                            <b>
                                <?php echo "Generi: " . implode(', ', $movie->genre->type) . "<br>"; ?>
                            </b>
                            <p>
                                <?php echo "Trama: " . $movie->plot . "<br>"; ?>
                            </p>
                            <small>
                                <?php echo "Durata: " . $movie->running_time . "<br>"; ?>
                            </small>
                            <small>
                                <?php echo "Voto: " . $movie->vote . "/5" . "<br>"; ?>
                            </small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</body>