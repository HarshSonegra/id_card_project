<?php
    session_start();
    if(!$_SESSION['enr']){
    header('Location:../login.php');
    }
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db('student');

    $enr = $_POST['enr'];

    $first = $_POST['first'];
    trim($first);

    $middle = $_POST['middle'];
    trim($middle);

    $last = $_POST['last'];
    trim($last);

    
    $birth_date = $_POST['birth_date'];

    $bg = $_POST['bg'];
    $pn = $_POST['pn'];
    $blood_group = $bg.$pn;
    
    $mobile1 = $_POST['mobile1'];
    $mobile2 = $_POST['mobile2'];

    if(isset($_FILES['image'])){
        if(file_exists("../student_img/$enr.jpg")){
            unlink("../student_img/$enr.jpg");
        }
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"../student_img/".$enr.".jpg");
           echo "Success";
        }else{
           print_r($errors);
        }
    }

    $addr = $_POST['addr'];

    $sql = "UPDATE `student`.`details` SET `first`='$first' , `middle`='$middle' , `last`='$last' , `birth_date`='$birth_date' , `blood_group`='$blood_group' , `mobile1`='$mobile1' , `mobile2`='$mobile2' , `addr`='$addr' , `photo`='$enr.jpg' WHERE `enr`= $enr;";

    $res = mysql_query($sql,$con);   
    header('location:view.php');
?>