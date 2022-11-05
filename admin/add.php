<?php
    session_start();
    if(!$_SESSION['enr']){
        header('Location:../login.php');
    }
    $year = $_GET['year'];
    $year = substr($year,2);
    $year .= "6270307";
    $n = $_GET['n'];
    for($i=1 ; $i <= $n ; $i++){
        if($i<=9){
            $id = $year."00".$i;
        }else if($i<=99){
            $id = $year."0".$i;
        }else{
            $id = $year.$i;
        }
        $con = mysql_connect('localhost','root','');
        $db = mysql_select_db('student');
        $sql = "CREATE USER $id IDENTIFIED WITH mysql_native_password BY $id;";
        $res = mysql_query($sql);
        $sql = "INSERT INTO `student`.`login` (`enr`, `pass`) VALUES ($id,$id);";
        mysql_query($sql,$con);
        $sql = "INSERT INTO `student`.`details` (`enr`) VALUES ($id);";
        mysql_query($sql,$con);
    } 
    header('Location:./admindash.php');
?>