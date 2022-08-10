<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    if(isset($_POST['btn1'])){
      $sql1="INSERT INTO map(m_val)
      VALUES('F') ";
      $result = $conn->query($sql1);
    }
    if(isset($_POST['btn2'])){
      $sql1="INSERT INTO map(m_val)
      VALUES('L')";
      $result = $conn->query($sql1);
    }
    if(isset($_POST['btn3'])){
      $sql1="INSERT INTO map(m_val)
      VALUES('S') ";
      $result = $conn->query($sql1);
    }
    if(isset($_POST['btn4'])){
      $sql1="INSERT INTO map(m_val)
      VALUES('R') ";
      $result = $conn->query($sql1);
    }
    if(isset($_POST['btn5'])){
      $sql1="INSERT INTO map(m_val)
      VALUES('B') ";
      $result = $conn->query($sql1);
    }


  $sql = "SELECT m_val FROM map ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
  if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
      echo $row["m_val"];
      echo"<br>";
  }
}
  $conn->close();

 ?>
