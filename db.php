<?php

require_once __DIR__ . '/models/ClassProduction.php';

$productions = [

    $goodfellas = new Production(
        'Quei Bravi Ragazzi',
        'Goodfellas',
        'IT',
        '10',

            new Genre(
                'Gangster',
                'Quei bravi ragazzi (Goodfellas) è un film del 1990 diretto da Martin Scorsese.'
                )
    ),

    $casino = new Production(
        'Casinò',
        'Casino',
        'IT',
        '10',
            new Genre('Gangster',
            'Casinò (Casino) è un film del 1995 diretto da Martin Scorsese'
            )
    ),
];

?>