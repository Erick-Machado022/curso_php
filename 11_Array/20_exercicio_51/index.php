<?php

    $arr = [
        'Erick' => 400,
        'Adriana' => 200,
        'Kamily' => 236,
        'julia' => 133
    ];

    arsort($arr);
?>

<h1>Ranking</h1>
<ol border='1'>
    <?php foreach($arr as $key => $pontos): ?>
        <li> <?=  $key ?> = <?=  $pontos?> </li>
    <?php endforeach; ?>
</ol>