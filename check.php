<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gpp id card</title>
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
        if($_POST['enr']!=null && $_POST['pass']!=null){
            $con = mysql_connect("localhost","root","");
            $db = mysql_select_db('student');
            $enr = $_POST['enr'];
            $pass = $_POST['pass'];
            $sql = "SELECT * FROM `login` WHERE `enr`= '$enr' and `pass`= '$pass';";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res);
            if($row==1){
                $admin = "gppadmin";
                if(strcmp($enr,$admin)==0){
                    // starting session
                    session_start();
                    $_SESSION['enr']=$enr;
                    header("Location:./admin/admindash.php");
                }else{
                    // starting session
                    session_start();
                    $_SESSION['enr']=$enr;
                    header('Location:./student/welcome.php');
                }
            }else{
                echo "<div class='msg'>
                    <h2>The Enrollment or passsword is wrong.</h2>
                    <h3>Kindly provide corrent enrollment number and password in login page</h3>
                    <a href='./login.php'>Goto login page</a>
                </div>";
            }
        }
    ?>
</body>
</html>
