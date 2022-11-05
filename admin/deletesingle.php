<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
  if(isset($_POST['enr'])){
    $enr = $_POST['enr'];
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("student");
    $sql = "DELETE FROM `login` WHERE `enr`=$enr";
    $res = mysql_query($sql,$con);
    header('Location:./view.php');
  }
?>