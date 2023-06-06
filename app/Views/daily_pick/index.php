<h2>Daily Pick</h2>

<style>
table, th, td {
  border:1px solid black;
}

tr {
    background-color: #dddddd;
}
</style>

<table>
    <?php foreach ($stocks as $stock): ?>

        <tr>
            <td><?= esc($stock['code']) ?></td>
        </tr>

    <?php endforeach ?>
</table>