<h2>Table Alternate Row Bg</h2>

<style>
table, th, td {
  border:1px solid black;
}

tr {
    background-color: #dddddd;
}
</style>

<?php

function getColorByIndex($index) {
  $colors = array('red', 'yellow', 'green');
  $colorIndex = $index % count($colors);
  return $colors[$colorIndex];
}

?>

<table>
    <?php foreach ($rand_array as $index => $row): ?>

        <tr style="background-color: <?php echo getColorByIndex($index); ?>">
            <td><?= esc($row) ?></td>
        </tr>

    <?php endforeach ?>
</table>