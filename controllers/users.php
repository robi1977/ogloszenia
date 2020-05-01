<?php
class UsersController extends Controller{
  //funkcja wymuszana przez klase nadrzędną Controller w metodzie abstrakcyjnej getName() klasy nadrzeędnej ustawiająca ścieżki dostępu do modeli i widoków
  protected function getName(){
    return 'users';
  }

  public function register(){
    $this->returnView('register');
  }

  public function createAccont(){
    $model = new User();
    if($model->register()){
      Message::setMsg("Konto utworzone", "success");
      $this->redirect('users', 'login');
    } else {
      Message::setMsg("Konto nie zostało utworzone", "error");
      $this->redirect('users', 'register');
    }
  }

  public function login(){
    $this->returnView('login');
  }

  public function authenticate(){
    $model = new User();
    if($model->login()){
      Message::setMsg("Zalogowano", "success");
      $this->redirect('home');
    } else {
      Message::setMsg("Nie udane logowanie", "error");
      $this->redirect('users', 'login');
    }
  }

  public function logout(){
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_data']);
    Message::setMsg("Wylogowano poprawnie", "success");
    $this->redirect('home');
  }
}