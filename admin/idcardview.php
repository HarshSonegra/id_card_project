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
    <title>View Card</title>
    <link rel="stylesheet" href="./css/card.css">
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="./js/js.js"></script>
</head>
<body>
    <center>
        <p class="logo" style="margin:auto"><a style="color:blue; font-weight:bolder; font-size:30px; padding-left: 1%;" href="./admindash.php"><span style="color:red;">GP-</span>Porbandar</a></p>
    </center>
    <div id="invoice">
        <div class="container">
            <div class="header">
                <img src="./images/gpplogo.jpg" alt="unable to load image">
                <div class="hcontent">
                    <h3>GOVERNMENT&nbsp; POLYTECHNIC<br>PORBANDAR</h3>
                    <p> Opp. Aerodram, National Highway 27, Porbandar</p>
                </div>
            </div>
            <div class="main">
                <div class="img">
                    <?php
                        $enr = $_POST['enr'];
                        $con = mysql_connect("localhost","root","");
                        $db = mysql_select_db("student");
                        $sql = "SELECT * FROM `details` WHERE `enr`=$enr";
                        $res = mysql_query($sql);
                        $n = mysql_fetch_assoc($res);
                        echo "<img src='../student_img/demo.jpg' alt=''>";
                    ?>
                </div>
                <div class="details">
                    <div class="labels">
                        <span>Department : </span>
                        <span>Enrollment : </span>
                        <span>Name : </span>
                        <span>Birthdate : </span>
                        <span>Blood-Group : </span>
                        <span>Mobile : </span>
                        <span>Address : </span>
                    </div>
                    <div class="ans">
                        <span>Computer Engineering</span>
                        <?php
                            
                            $first = $n['first'];
                            $middle = $n['middle'];
                            $last = $n['last'];
                            $name = $first." ".$last." ".$middle;
                            $dte = $n['birth_date'];
                            $bld = $n['blood_group'];
                            $mob = $n['mobile1'];
                            $mob2 = $n['mobile2'];
                            $addr = $n['addr'];

                            echo "<span>$enr</span>";
                            echo "<span>$name</span>";
                            echo "<span>$dte</span>";
                            echo "<span>$bld</span>";
                            echo "<span>$mob / $mob2</span>";
                            echo "<span>$addr</span>";
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="sign">
                <h6>PRINCIPAL</h6>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-right mb-3">
        <center><button onclick="generatePDF()" class="btn btn-success">download pdf</button></center>
    </div>
</body>
</html>