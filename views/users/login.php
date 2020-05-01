<div class="panel panel-default">
  <div class="panelheading">
    <h3 class="panel-title">Zaloguj się</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="<?php echo ROOT_URL; ?>users/authenticate">
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Hasło</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Zaloguj" />
    </form>
  </div>
</div>