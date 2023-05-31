<h2>Edit email</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/email/edit/<?= esc($email['eid']) ?>" method="post">
    <?= csrf_field() ?>

    <label for="to">To</label>
    <input type="input" name="to" value="<?= esc($email['receiver'])?>"></input>
    <br>

    <label for="subject">Subject</label>
    <input type="input" name="subject" value="<?= esc($email['subject']) ?>"></input>
    <br>

    <label for="message">Message</label>
    <textarea name="message" cols="45" rows="4"><?= esc($email['message']) ?></textarea>
    <br>

    <input type="submit" name="submit" value="Confirm edit">
</form>
<button onclick = "location.href = '<?php echo base_url('email/sent');?>'">Cancel</button>