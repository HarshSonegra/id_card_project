<?php
    session_start();
    if(!$_SESSION['enr']){
        header('Location:../login.php');
    }
    $enr = $_SESSION['enr'];
    $con = mysql_connect('localhost','root','');
    $db = mysql_select_db('student');
    $sql = "UPDATE `req` SET `sts`=0 where `enr`=$enr;";
    $res = mysql_query($sql);
    header('location:./studentreq.php');
?>