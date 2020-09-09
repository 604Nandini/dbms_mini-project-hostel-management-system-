
<?php
session_start();
include('config.php');
include('checklogin.php');
check_login();
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Payment Log</title>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../css/dataTables.bootstrap .min.css">
	<link rel="stylesheet" href="../css/bootstrap-social.css">
	<link rel="stylesheet" href="../css/bootstrap-select.css">
	<link rel="stylesheet" href="../css/fileinput.min.css">
	<link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
		<link rel="stylesheet" href="../css/jquery.dataTables.min">
	<!-- <link rel="stylesheet" type="text/css" href="../css/DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="../css/DataTables/datatables.min.js"></script> -->
</head>
<?php include('profile-header.php') ?>
<?php include('admin-sidebar.php') ?>
<style type="text/css">
		.navbar ul{
			margin-top: 11px;
			margin-left: -1px;
			position: absolute;
		}
		body{
			margin:0px 0px;
		}
		.sidenav{
			position: absolute;
			height: 170%;

		}
		.main-page{
			position: relative;

		}
	
	</style>
	
<center><div class="main-page">
	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"style="margin-left: -450px;margin-top: 30px;">Student Payment Log<hr></h2>
						<div class="panel panel-primary" style="margin-left: 240px;width: 80%;">
							<div class="panel-heading">All Student Payment Details</div>
							<div class="panel-body" style="margin:0px -10px 0px 0px;">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="90%" style="margin-left: 0px;">
									<thead>
										<tr > 
											<th>Sno.</th>
											<th>User Id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Total Amount</th>
											<th>Payment Date</th>
										
											<th>Card Number</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>User Id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Total Amount</th>
											<th>Payment Date</th>
										
											<th>Card Number</th>
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from payment";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->id;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->emailid;?></td>
<td><?php echo $row->totalamount;?></td>
<td><?php echo $row->updationDate;?></td>
<td><?php echo $row->cardnumber;?></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div></div>

	<!-- Loading Scripts -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap-select.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
	<script src="../js/Chart.min.js"></script>
	<script src="../js/fileinput.js"></script>
	<script src="../js/chartData.js"></script>
	<script src="../js/main.js"></script>
</center>
