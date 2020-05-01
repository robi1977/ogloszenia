<?php
class Ad extends Model{
  public function Index(){
    $this->query('SELECT * FROM ads ORDER BY create_date DESC');
    $rows=$this->resultSet();
    return $rows;
  }

  public function add(){

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($post['submit']){
      if($post['title'] == "" || $post['content'] == ""){
        Message::setMsg("Proszę wypełnić wszystkie pola.", "error");
        return;
      }

      $this->query('INSERT INTO ads (title, content, user_id) VALUES (:title, :content, :user_id)');
      $this->bind(':title', $post['title']);
      $this->bind(':content', $post['content']);
      $this->bind(':user_id', $_SESSION['user_data']['id']);
      $this->execute();

      if($this->lastInsertId()){
        return true;
      }
    }
    return false;
  }
}