<?php

require_once __DIR__ . '/models/ClassProduction.php';
require_once __DIR__ .'/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php foreach ($array_productions as $index=>$productions ):?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Genere</th>
                <th scope="col">Lingua</th>
                <th scope="col">Voto</th>
                <?php if ($index == 0) : ?>
                <th scope="col">Profitti</th>
                <th scope="col">Durata</th>
                <?php elseif ($index == 1) : ?>
                <th scope="col">Stagioni</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productions as $production ):?>
                <?php include __DIR__ . '/partials/table.php' ?>
            <?php endforeach; ?>
        </tbody>
        
    </table>
    <?php endforeach; ?>

</body>

</html>