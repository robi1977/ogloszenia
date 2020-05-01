<?php
class Ad extends Model{
  public function Index(){
    $this->query('SELECT * FROM ads ORDER BY create_date DESC');
    $rows=$this->resultSet();
    return $rows;
  }
}