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
    <title>View Students</title>
    <style>
        .table{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <p class="logo" style="margin:15px;"><a style="color:blue; font-weight:bolder; font-size:30px; padding-left: 1%;" href="./admindash.php"><span style="color:red;">GP-</span>Porbandar</a></p>
        <table class="table">
                <thead>
                <tr>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">BirthDate</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Mobile-1</th>
                    <th scope="col">Mobile-2</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $con = mysql_connect("localhost","root","");
                    $db = mysql_select_db('student');
                    $sql = "SELECT * FROM `login` where `enr` not like 'g%';";
                    $res = mysql_query($sql);
                    if($res!=null){
                        while($i = mysql_fetch_assoc($res)) {
                            $enr = $i['enr'];
                            $s =  "SELECT * FROM `details` WHERE `enr`=$enr;";
                            $r = mysql_query($s);
                            $n = mysql_fetch_assoc($r);
                            $first = $n['first'];
                            $last = $n['last'];
                            $name = $first." ".$last;
                            $pass = $i['pass'];
                            $birth = $n['birth_date'];
                            $bld = $n['blood_group'];
                            $mob = $n['mobile1'];
                            $mob2 = $n['mobile2'];

                            echo "<tr>";
                                echo "<td scope='row'>$enr</td>";
                                if($first==null){
                                    echo "<td>-</td>";
                                }else{
                                    echo "<td>$name</td>";
                                }
                                echo "<td>$pass</td>";
                                if($birth==null){
                                    echo "<td>-</td>";
                                }else{
                                    echo "<td>$birth</td>";
                                }
                                if($bld==null){
                                    echo "<td>-</td>";
                                }else{
                                    echo "<td>$bld</td>";
                                }
                                if($mob==null){
                                    echo "<td>-</td>";
                                }else{
                                    echo "<td><a style='color:blue ;' href='tel:'$mob>$mob</a></td>";
                                }if($mob2==null){
                                    echo "<td>-</td>";
                                }else{
                                    echo "<td><a style='color:blue ;' href='tel:'$mob2>$mob2</a></td>";
                                }
                                echo "<td>
                                    <form action='./deletesingle.php' method='post'>
                                        <input type='hidden' name='enr' value=$enr>
                                        <input type='submit' class='btn btn-danger' value='Delete >'>
                                    </form>
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