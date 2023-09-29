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
    <?php
    require_once __DIR__ . 'models/Movie.php';
    $new_movie = new Movie(
        'Grease',
        'Randal Kleiser',
        'Musicale/Romantico',
        '"Grease" è una storia d amore ambientata negli anni 50 a Rydell High School. Racconta la storia di Danny Zuko, interpretato da John Travolta, e Sandy Olsson, interpretata da Olivia Newton-John. Dopo un estate di passione, i due si ritrovano inaspettatamente come studenti alla Rydell High School. Tuttavia, le differenze tra i loro stili di vita e gruppi sociali creano tensioni. Il film è noto per le sue coreografie di danza spensierate, le canzoni orecchiabili e i costumi retrò. È una storia di amore, amicizia e crescita personale ambientata in un contesto di musica e ballo degli anni 50.
        ',
        '1 ora e 50 minuti',
        4.5,
    );
    ?>
</body>