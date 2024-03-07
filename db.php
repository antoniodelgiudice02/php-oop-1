<?php

require_once __DIR__ . '/models/ClassProduction.php';
require_once __DIR__ . '/models/ClassMovie.php';
require_once __DIR__ . '/models/ClassSerie.php';


$array_productions = [

        $movies= [$goodfellas = new Movie(
            'Quei Bravi Ragazzi',
            'Goodfellas',
            'IT',
            '10',
    
                new Genre(
                    'Gangster',
                    'Quei bravi ragazzi (Goodfellas) è un film del 1990 diretto da Martin Scorsese.'
                ),
            1000,
            90
            
        ),],
    
        
    
        $series = [$twin_peaks = new Serie(
            'I segreti di Twin Peaks',
            'Twin Peaks',
            'IT',
            '10',
                new Genre('Giallo',
                'Il corpo esanime della giovane Laura Palmer viene trovato avvolto nella plastica lungo il fiume di Twin Peaks.'
        ),
            5
        ),]
]



?>