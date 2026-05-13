<?php

    $pessoas = [
        "Erick" => 21,
        "Kamily" => 20,
        "Julia" => 20,
        "Adriana" => 54
    ]
?>

<table border=" 1"> 
    <tr>
        <th>Nome </th>
        <th>Idade </th>
    </tr>

    <?php foreach($pessoas as $key => $idade): ?>

    <tr>
        <td> <?= $key; ?> </td>
        <td> <?= $idade; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>