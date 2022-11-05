<?php
    session_start();
    if(!$_SESSION['enr']){
        header('Location:../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password Gpp</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        .msg{
            display:flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
        }
        a{
            color:white;
        }
    </style>
</head>
<body>
    <?php
        $con = mysql_connect("localhost","root","");
        $db = mysql_select_db('student');
        $old = $_POST['old'];
        $new = $_POST['new'];
        $enr = $_POST['enr'];
        $sql = "SELECT pass FROM `login` where `enr` = '$enr';";
        $res = mysql_query($sql);
        $temp = mysql_fetch_assoc($res);
        $verify = $temp['pass'];
        if($verify==$old){
            $sql = "UPDATE  `login` SET `pass`='$new' WHERE `enr`= '$enr' and `pass`='$old';";
            $res = mysql_query($sql);
            echo "Your password changed succesfully <br>
            <a href='./welcome.php'>Goto Dashboard</a>";
        }else{
            echo "<div class='msg'>
                    <h2>The Old passsword is wrong.</h2>
                    <h3>Kindly provide corrent password in change page</h3>
                    <a href='./change.php'>Goto change password page</a>
                </div>";
        }
    ?>
</body>
</html>
