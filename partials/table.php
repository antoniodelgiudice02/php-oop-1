<tr>
    
    <td>
        <?= $production->getTitles() ?>
    </td>
    <td>
        <?= $production->getGenre()?>
    </td>
    <td>
        <?= $production->language ?>
    </td>
    <td>
        <?= $production->vote ?>
    </td>
    <?php if ($production instanceof Movie) :?>
    <td>
        <?= $production->getProfitti() ?>
    </td>
    <td>
        <?= $production->getDurata() ?>
    </td>
    <?php elseif ($production instanceof Serie) :?>
        <td>
        <?= $production->seasons ?>
    </td>
    <?php endif; ?>

</tr>