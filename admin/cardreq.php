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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      table *{
        text-align:center;
      }
      .forms{
        display:flex;
        justify-content:center;
      }
      .forms *{
        margin:0px 5px;
      }
      .contain{
        width:100vw;
        padding:1%;
      }
    </style>
    <title>View Students</title>
</head>
<body>
    <div class="contain">
    <p class="logo" style="margin:15px;"><a style="color:blue; font-weight:bolder; font-size:30px; padding-left: 1%;" href="./admindash.php"><span style="color:red;">GP-</span>Porbandar</a></p>
        <table class="table">
                <thead>
                <tr>
                    <th scope="col">Req_id</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Name</th>
                    <th scope="col">BirthDate</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Mobile-1</th>
                    <th scope="col">Mobile-2</th>
                    <th scope="col">Request-Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $con = mysql_connect("localhost","root","");
                    $db = mysql_select_db('student');
                    $sql = "SELECT * FROM `req` where `sts`=0 order by `req_date`;";
                    $res = mysql_query($sql);
                    if($res!=null){
                        while($i = mysql_fetch_assoc($res)) {
                            $req_id = $i['id'];
                            $enr = $i['enr'];
                            $dte = $i['req_date'];
                            $s =  "SELECT * FROM `details` WHERE `enr`=$enr;";
                            $r = mysql_query($s);
                            $n = mysql_fetch_assoc($r);
                            $first = $n['first'];
                            $last = $n['last'];
                            $name = $first." ".$last;
                            $birth = $n['birth_date'];
                            $bld = $n['blood_group'];
                            $mob = $n['mobile1'];
                            $mob2 = $n['mobile2'];
                            echo "<tr>";
                                echo "<td scope='row'>$req_id</td>";
                                echo "<td>$enr</td>";
                                echo "<td>$name</td>";
                                echo "<td>$birth</td>";
                                echo "<td>$bld</td>";
                                echo "<td><a style='color:blue ;' href='tel:'$mob>$mob</a></td>";
                                echo "<td><a style='color:blue ;' href='tel:'$mob2>$mob2</a></td>";
                                echo "<td>$dte</td>";
                                echo "<td>
                                    <div class='forms'>
                                      <form action='./approve.php' method='post'>
                                            <input type='hidden' name='enr' value=$enr>
                                            <input type='submit' class='btn btn-success' value='Approve>'>
                                        </form>
                                        <form action='./idcardview.php' method='post'>
                                            <input type='hidden' name='enr' value=$enr>
                                            <input type='submit' class='btn btn-primary' value='View>'>
                                        </form>
                                        <form action='./reject.php' method='post'>
                                            <input type='hidden' name='enr' value=$enr>
                                            <input type='submit' class='btn btn-danger' value='Reject>'>
                                        </form>
                                    </div>
                                </td>";
                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>