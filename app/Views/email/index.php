<head>
<style>
.row {
  display: flex;
}

.column {
  border: 1px solid black;
  /* display: flex; */
  flex-direction: column;
}

.menu{
  padding: 10px;
}

.header{
  border-bottom: 1px solid black;
  padding: 10px;
}

.all {
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid black;
}
</style>
</head>

<div class = "row">
    <a class = 'menu' href="<?php echo site_url('email/sent') ?>">Sent</a>
    <a class = 'menu' href="<?php echo site_url('email/send_email') ?>">Compose email</a>
</div>
<div class = "row">
    <div class = "column">
        <h1 class = "header"><?= esc($mode) ?></h1>
        
        <?php if (! empty($emails) && is_array($emails)): ?>
          <?php foreach ($emails as $email): ?>
            <div class = 'all'>
              <h3><?= esc($email['receiver']) ?></h3>
              <p><a href="/email/<?= esc($mode) ?>/<?= esc($email['eid']) ?>"><?= esc($email['subject']) ?></a></p>
              <p><?= esc($email['message'])?></p>
              <button onclick = "editEmail(<?= esc($email['eid']) ?>)">edit</button>
              <button onclick = "deleteEmail(<?= esc($email['eid']) ?>)">delete</button>
            </div>
          <?php endforeach ?>

        <?php else: ?>

        <?php endif ?>
    </div>
</div>

<script>
  function deleteEmail(eid){
    if (confirm("Are you sure you want to delete this email?")) {
      location.href = "/email/delete/" + eid;
    } else {
      // do nothing
    }
  }

  function editEmail(eid){
    location.href = "/email/edit/" + eid;
  }
</script>