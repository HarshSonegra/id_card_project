<?php
    session_start();
    if(!$_SESSION['enr']){
        header('Location:../login.php');
    }
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db('student');
    $enr = $_SESSION['enr'];
    $sql = "SELECT * FROM `details` where `enr`=$enr;";

    $res = mysql_query($sql);
    $i = mysql_fetch_assoc($res);

    $enr = $i['enr'];
    $first = $i['first'];
    $middle = $i['middle'];
    $last = $i['last'];
    $birth_date = $i['birth_date'];
    $blood_group = $i['blood_group'];
    $mobile1 = $i['mobile1'];
    $mobile2 = $i['mobile2'];
    $addr = $i['addr'];
    $photo = $i['photo'];

    if($enr==null || $first==null || $last==null || $middle==null || $birth_date==null || $blood_group==null ||  $mobile1==null || $mobile2==null || $addr==null || $photo==null){
        header('location:./error.php');
    }else{
        $reqDate = date("d-m-y");
        $enr = $_SESSION['enr'];
        echo $enr;
        $sql = "INSERT INTO `student`.`req` (`enr`, `req_date` ,`sts`) VALUES ('$enr','$reqDate',0);";
        mysql_query($sql,$con);
        header('location:./success.php');
    }
?>