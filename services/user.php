<?php
  include("connect.php");

  class User{

    public $id = "";
    public $username = "";
    public $password = "";

    function setUsername($username){
      $this->username = $username;
    }

    function setPassword($password){
      $this->password = $password;
    }

    function save(){
      $db = new DataBase();
      $conn = $db->connect();
      if($conn){
        $sql = "INSERT INTO user (user, pass) VALUES ('".$this->username."', '".$this->password."')";
        if ($conn->query($sql) === TRUE) {
          return array(TRUE, $this->toJSON());
        } else {
          return array(FALSE, $conn->error);
        }
      }
    }

	
	function delete(){
      $conn = $db->connect();
      if($conn){
        $sql = "INSERT INTO user (user, pass) VALUES ('".$this->username."', '".$this->password."')";
        if ($conn->query($sql) === TRUE) {
          return array(TRUE, $this->username.delete, $this->password.delete);
        } else {
          return array(FALSE, $conn->error);
        }
      }
    } 
	
	function update(){
      $conn = $db->connect();
      if($conn){
        $sql = "INSERT INTO user (user, pass) VALUES ('".$this->username."', '".$this->password."')";
        if ($conn->query($sql) === TRUE) {
          return array(TRUE, $this->username.setUsername, $this->password.setPassword);
        } else {
          return array(FALSE, $conn->error);
        }
      }
    } 
	
	
    function toJSON(){
      $arr = array(
              'id' => "",
              'username' => $this->username,
              'password' => $this->password,
              );
      return json_encode($arr);
    }

  }
?>
