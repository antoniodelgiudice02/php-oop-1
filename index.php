<?php

class Production
{
    public string $title;
    public string $language;
    public int $vote;

    public function __construct($title, $language, $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

$goodfellas = new Production('Good Fellas', 'En', '10');
$casino = new Production('Casino', 'En', '10');

$productions = [
    $goodfellas,
    $casino,
];

var_dump($productions);

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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Lingua</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productions as $production ):?>
                <tr >
                    <td><?= $production->title ?></td>
                    <td><?= $production->language ?></td>
                    <td><?= $production->vote ?></td>
                </tr >
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>