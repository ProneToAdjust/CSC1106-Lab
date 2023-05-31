<h2>Credit Card</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/credit-card" method="post">
    <?= csrf_field() ?>

    <label for="card_number">Card Number</label>
    <input type="input" name="card_number" value="<?= set_value('card_number') ?>">
    <br>
    <label for="month">Month</label>
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
    <br>
    <label for="year">Year</label>
    <select name="year" id="year">
        <?php for ($i=2023; $i < 2063; $i++):?>
            <option value = <?=esc($i)?>><?=esc($i)?></option>
        <?php endfor ?>
    </select>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>