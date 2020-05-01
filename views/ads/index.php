<?php if(isset($_SESSION['is_logged_in'])) : ?>
  <a class="btn btn-success btn-add-ad" href="<?php echo ROOT_PATH; ?>ads/add">Dodaj nowe ogłoszenie</a>
<?php endif; ?>
<?php foreach($model as $item): ?>
  <div class="well">
    <h3><?php echo $item['title']; ?></h3>
    <small><?php echo $item['create_date']; ?></small>
    <hr />
    <p><?php echo $item['content'] ?></p>
  </div>
<?php endforeach; ?>