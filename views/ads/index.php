<?php foreach($model as $item): ?>
  <div class="well">
    <h3><?php echo $item['title']; ?></h3>
    <small><?php echo $item['create_date']; ?></small>
    <hr />
    <p><?php echo $item['content'] ?></p>
  </div>
<?php endforeach; ?>