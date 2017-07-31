<?php
include_once "conf.php";
session_set();
$sql_users = "SELECT * FROM `users`";

$query_users = mysqli_query($conn, $sql_users);

$sql_disease = "SELECT * FROM `disease`";

$query_disease = mysqli_query($conn, $sql_disease);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users|Diseases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    <!--Header Section Start-->
    <nav class="navbar navbar-default">

        <div class="container-fluid">
            <div class="navbar-header">
                <h2>Medical Project</h2>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header section End-->
    <!--Tabs Section Start-->
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2 bg-color">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#users">Users</a></li>
                <li class=""><a data-toggle="pill" href="#diseases">Diseases</a></li>
            </ul>
            <div class="tab-content">
                <div id="users" class="tab-pane fade in active">
                <div class="right-align">
                    <strong>UserList</strong>
                    <div class="form-group">
                        <input type="text" placeholder="Search">
                        <button class="btn btn-default btn-pad" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                <div class="panel-group" id="accordion">
                    <!--div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <a data-toggle='collapse' data-parent='#accordion' href='#collapse1'!-->
                                    <?php
                                         /*while($row = mysqli_fetch_array($query)) {
                                    echo "$row[1]  <span class='caret'></span> </a>
                            </h4>
                        </div>
                        <div id='collapse1 class='panel-collapse collapse in'>
                            <div class='panel-body'>" ;
                                echo "$row[2]<br>";
                                echo "$row[3]<br>";
                                echo "$row[4]
                            </div>
                        </div>
                    </div>";
                }*/
                    ?>
                    <?php
                    $i=1;
                    while($row = mysqli_fetch_array($query_users)) {
                        echo "<div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <a data-toggle='collapse' data-parent='#accordion' href='#collapse$i'>
                                   $row[1] <span class='caret'></span> </a>
                            </h4>
                        </div>
                        <div id='collapse$i' class='panel-collapse collapse'>
                            <div class='panel-body'>
                                Age : $row[2]<br>
                                Height : $row[3]<br>
                                Weight : $row[4]
                            </div>
                        </div>
                    </div>";
                    $i++;
                    }



                    ?>
                </div>
            </div>
                   <!--echo "<div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <a data-toggle='collapse' data-parent='#accordion' href='#collapse2'>
                                   Michael Robinson <span class='caret'></span> </a>
                            </h4>
                        </div>
                        <div id='collapse2' class='panel-collapse collapse'>
                            <div class='panel-body'>
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>";


                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                    Alexander Robinson <span class='caret'></span> </a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                    Jennifer Pinsker <span class="caret"></span> </a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Bob Robson <span class="caret"></span> </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                    Alexander Robinson <span class="caret"></span> </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                    John Boo <span class="caret"></span>    </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                Age:51<br>
                                Height:5'11<br>
                                Weight:150pounds
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

                 <div id="diseases" class="tab-pane fade">
                <div class="right-align">
                    <strong>Disease List</strong>
                    <div class="form-group">
                        <a href="new.php"><i class="btn btn-default btn-center">New Entry</i></a>
                        <input type="text" placeholder="Disease Search">
                        <button class="btn btn-default btn-pad" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                <div class="panel-group">
                <?php

                while($row=mysqli_fetch_array($query_disease)) {
					$image_id = $row['id'];
                    echo "<div class='panel panel-default'>
                        <div class='panel-heading'>
                            $row[1]
                            <span class='dropdown drpdwn'>
                                <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Options
                                    <span class='caret'></span></button>
                                <ul class='dropdown-menu'>
                                    <li><a href='view.php'>View</a></li>
                                    <li><a href='update.php?update=$row[0]'>Update</a></li>
                                    <li><a href='delete.php?delete=$row[0]'>Delete</a></li>
                                </ul>
                            </span>
                        </div>
                    </div>";
                }

                ?>
                    <!--div class="panel panel-default">
                        <div class="panel-heading">
                            Disease Name2
                            <span class="dropdown drpdwn">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Delete</a></li>

                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Disease Name3
                            <span class="dropdown drpdwn">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Delete</a></li>

                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Disease Name4
                            <span class="dropdown drpdwn">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Disease Name5
                            <span class="dropdown drpdwn">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Delete</a></li>

                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Disease Name6
                            <span class="dropdown drpdwn">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Delete</a></li>

                                </ul>
                            </span>
                        </div>
                    </div-->
                </div>
            </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
