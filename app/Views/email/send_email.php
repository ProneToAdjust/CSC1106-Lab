<h2>Send email</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/email/send_email" method="post">
    <?= csrf_field() ?>

    <label for="to">To</label>
    <input type="input" name="to" value="<?= set_value('to') ?>">
    <br>

    <label for="subject">Subject</label>
    <input type="input" name="subject" value="<?= set_value('subject') ?>">
    <br>

    <label for="message">Message</label>
    <textarea name="message" cols="45" rows="4"><?= set_value('message') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Send email">
</form>
<button onclick = "location.href = '<?php echo base_url('email/sent');?>'">Cancel</button>