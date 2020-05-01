<?php
class AdsController extends Controller{
  protected function Index(){
    $model = new Ad();
    $this->returnView('index', $model->Index());
  }

  protected function getName(){
    return 'ads';
  }

  public function create(){
    if(!isset($_SESSION['is_logged_in'])){
      header('Location: '.ROOT_URL.'ads');
    }

    $model = new Ad();
    if ($model->add()){
      Message::setMsg("Ogłoszenie poprawnie dodane", "success");
      $this->redirect('ads');
    } else {
      Message::setMsg("Nie udało się dodać ogłoszenia", "error");
      $this->redirect('ads','add');
    }
  }

  protected function add(){
    if(!isset($_SESSION['is_logged_in'])){
      header('Location: '.ROOT_URL.'ads');
    }

    $this->returnView('add',true);
  }
}