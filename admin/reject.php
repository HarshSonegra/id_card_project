<?php
    session_start();
    if(!$_SESSION['enr']){
        header('Location:../login.php');
    }
    $enr = $_POST['enr'];
    $con = mysql_connect('localhost','root','');
    $db = mysql_select_db('student');
    $sql = "UPDATE `req` SET `sts`=-1 where `enr`=$enr;";
    $res = mysql_query($sql);
    header('location:./cardreq.php');
?>