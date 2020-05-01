<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Dodaj nowe ogłoszenie</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="<?php echo ROOT_URL; ?>ads/create">
      <div class="form-group">
        <label>Tytuł</label>
        <input type="text" name="title" class="form-control" />
      </div>
      <div class="form-group">
        <label>Treść</label>
        <textarea name="content" class="form-control"></textarea>
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Dodaj"/>
      <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>ads">Anuluj</a>
    </form>
  </div>
</div>