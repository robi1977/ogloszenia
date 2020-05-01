<?php
class AdsController extends Controller{
  protected function Index(){
    $model = new Ad();
    $this->returnView('index', $model->Index());
  }

  protected function getName(){
    return 'ads';
  }
}