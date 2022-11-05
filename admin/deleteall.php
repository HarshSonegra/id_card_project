<?php
    session_start();
    if(!$_SESSION['enr']){
      header('Location:../login.php');
    }
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("student");
    $sql = "DELETE FROM `login` WHERE `enr` NOT LIKE 'g%';";
    $res = mysql_query($sql,$con);
    header('Location:./admindash.php');
?>