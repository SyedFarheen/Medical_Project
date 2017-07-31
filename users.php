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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/users.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	
	
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
                                <li><a href="changepwd.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
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
            <ul class="nav nav-pills" style="padding-bottom:15px">
                <li class="active"><a data-toggle="pill" href="#users">Users List</a></li>
                <li class=""><a data-toggle="pill" href="#diseases">Diseases List</a></li>
            </ul>
            <div class="tab-content">
                <div id="users" class="tab-pane fade in active">
                <!--div class="right-align">
                    <strong>UserList</strong>
                    <div class="form-group">
                        <input id="searchFilter" type="text" placeholder="Search">
                        <button class="btn btn-default btn-pad" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div-->
                <div class="panel-group" id="accordion">
				<div class="table-responsive">

				<table id="Table1" class="table table-striped table-hover">
					<thead class='the-box dark full'>
						<tr>
							<th>Users</th>
							<th>Age</th>
							<th>Height</th>
							<th>Weight</th>
						</tr>
					</thead>
					<tbody>
                    
                    <?php
                    $i=1;
                    while($row = mysqli_fetch_array($query_users)) {
                                
						echo "
							<tr>
								<td>$row[1]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
								<td>$row[5]</td>
							</tr>";
						$i++;
                    }
                    ?>
						</tbody>
					</table>
					</div>
                </div>
            </div>
                   

                 <div id="diseases" class="tab-pane fade">
                <!--div class="right-align"-->
                    <!--strong>Disease List</strong-->
                    <div class="form-group">
                        <a href="new.php"><i class="btn btn-default btn-center">New Entry</i></a>
                        <!--input id="dSearch" type="text" placeholder="Disease Search">
                        <button class="btn btn-default btn-pad" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button-->
                    </div>
                <!--/div-->
                <div class="panel-group">
				<div class="table-responsive">
				<table id="Table2" class="display">
				<thead class='the-box dark full'>
						<tr>
							<th>Diseases</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
                <?php

                while($row=mysqli_fetch_array($query_disease)) {
					$image_id = $row['id'];
					//data-toggle='modal' data-target='#Modal'
                    
						echo "<tr>
						<td>$row[1]</td>
						<td>
						<span class='dropdown drpdwn'>
                                <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Options
                                    <span class='caret'></span></button>
                                <ul class='dropdown-menu'>
                                    <li><a href='view.php?view=$row[0]'>View</a></li>
                                    <li><a href='update.php?update=$row[0]'>Update</a></li>
                                    <li><a href=''data-toggle='modal' data-target='#Modal$row[0]'>Delete</a>
                                </li>
                                </ul>
                            <div class='modal fade' id='Modal$row[0]' role='dialog'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                            <h4 class='modal-title'>Delete Disease</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-danger delbutton' data-dismiss='modal' onClick='deleteClicked($row[0])'>Delete</button>
                                            <button type='button' class='btn btn-primary' data-dismiss='modal'>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            </span>
						</td>
						</tr>";
                }

                ?>
					</tbody>
				</table>
				</div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
	
	

	<script>
		$(document).ready(function(){
			$('#Table1').DataTable();
			$('#Table2').DataTable();
			
			
		});
		function deleteClicked($deleteId) {
			
			
			$.ajax({type: 'POST', 
						url: "delete.php", 
						data: {delete : $deleteId},
						success: function(){
						location.reload();
						}
			});
		}
			
			
				 
	</script>

    
</body>
</html>
