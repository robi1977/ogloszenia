<?php
class User extends Model{
  public function register(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password= md5($post['password']);

    if($post['submit']){
      if($post['name'] == "" || $post['email'] == "" || $post['password'] == ""){
        Message::setMsg("Proszę wypełnić wszystkie pola", "error");
        return;
      }

      $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);
      $this->execute();

      if($this->lastInsertId()){
        return true;
      }
    }
    return false;
  }

  public function login(){
    $post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['submit']){
      $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $row = $this->single();

      if($row){
        //jeżeli użytkownik istnieje to ustawianie danych sesji
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id" => $row['id'],
          "name" => $row['name'],
          "email" => $row['email']
        );
        return true;
      }
    }
    return false;
  }
}