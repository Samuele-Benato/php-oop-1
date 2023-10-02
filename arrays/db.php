<?php
require __DIR__ . '/../models/Movie.php';
require __DIR__ . '/../models/Genre.php';

$grease_movie = new Movie(
    'Grease',
    'Randal Kleiser',
    1978,
    new Genre(['Musicale', 'Romantico']),
    '"Grease" è una storia d amore ambientata negli anni 50 a Rydell High School. Racconta la storia di Danny Zuko, interpretato da John Travolta, e Sandy Olsson, interpretata da Olivia Newton-John. Dopo un estate di passione, i due si ritrovano inaspettatamente come studenti alla Rydell High School. Tuttavia, le differenze tra i loro stili di vita e gruppi sociali creano tensioni. Il film è noto per le sue coreografie di danza spensierate, le canzoni orecchiabili e i costumi retrò. È una storia di amore, amicizia e crescita personale ambientata in un contesto di musica e ballo degli anni 50.
        ',
    '1 ora e 50 minuti',
    4.5,
);

$terminator_movie = new Movie(
    'The Terminator',
    'James Cameron',
    1984,
    new Genre(['Azione', 'Science']),
    '"The Terminator" è un film di fantascienza che presenta un futuro distopico in cui una superintelligenza chiamata Skynet ha preso il controllo delle macchine e sta cercando di annientare l umanità. La trama si concentra su Sarah Connor, interpretata da Linda Hamilton, una donna destinata a diventare la madre del futuro leader della resistenza umana. Un cyborg assassino noto come il Terminator, interpretato da Arnold Schwarzenegger, viene inviato indietro nel tempo per uccidere Sarah e impedire la nascita del suo futuro figlio. Tuttavia, un soldato della resistenza umana di nome Kyle Reese viene anche inviato indietro nel tempo per proteggere Sarah. Il film è una corsa contro il tempo mentre Sarah e Kyle cercano di sfuggire al Terminator e impedire un futuro apocalittico.',
    '1 ora e 47 minuti',
    4.7,
);

$movies = [$terminator_movie, $grease_movie];
?>