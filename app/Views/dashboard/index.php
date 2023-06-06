<h2>Dashboard</h2>

<style>
table, th, td {
  border:1px solid black;
}

tr {
    background-color: #dddddd;
}
</style>

<?php

function getChangeColor($change) {
    if (strpos($change, '-') !== false) {
        return 'red';
    } 
    else if (strpos($change, '+') !== false) {
      return 'green';
    }
    else {
      return 'black';
    }
}

?>

<table>
    <?php foreach ($stocks as $index => $stock): ?>

        <tr>
            <td><?= esc($stock['code']) ?></td>
            <td><?= esc($stock['stock']) ?></td>
            <td><?= esc($stock['previous_close']) ?></td>
            <td><?= esc($stock['price']) ?></td>
            <td style="color: <?php echo getChangeColor($stock['change']); ?>"><?= esc($stock['change']) ?></td>
        </tr>

    <?php endforeach ?>
</table>