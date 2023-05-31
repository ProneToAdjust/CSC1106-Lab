<h2><?= esc($email['receiver'])?></h2>
<h4><?= esc($email['subject'])?></h4>
<p><?= esc($email['message'])?></p>
<button onclick = "location.href = '<?php echo base_url('email/sent');?>'">Back</button>