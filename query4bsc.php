
<?php

include('includes/config.php');

?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Queries</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
		<link rel="stylesheet" href="css/DataTables/datatables.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">

	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="css/DataTables/datatables.min.css" rel="stylesheet">
	<style type="text/css">
	.nav{
		width: 100%;
	}
	.nav li a:hover{
		text-decoration: none;
	}
	.nav li a{
		padding-top: 18px;
	}
		#test  {
    animation: fadein 600ms;
    -moz-animation: fadein 600ms; /* Firefox */
    -webkit-animation: fadein 600ms; /* Safari and Chrome */
    -o-animation: fadein 600ms; /* Opera */
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-moz-keyframes fadein { /* Firefox */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-o-keyframes fadein { /* Opera */
    from {
        opacity:0;
    }
    to {
        opacity: 1;
    }
}
</style>


<center>
	<?php include('includes/header.php') ?>
	<div id="test">
	<div class="main-page">
	

	<div class="ts-main-content" style="margin-left: -240px;">
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h3 class="page-title "style="text-align: center;margin-left: 250px;margin-top: 50px; text-transform: capitalize; padding-bottom: 10px;">List of students in Bachelor of Technology </h3>
						<div class="bg-warning text-white" style="margin-left: 16%;width: 80%;font-size: 25px;">
							<div class="card-title" style="margin-top: 10px;margin-bottom: 5px;">All Users Details</div>
							<div class="">
								
								<table id="zctb9" class="display table table-bordered table-hover table-dark" cellspacing="0" width="90%" style="margin-left: 0px;text-align: center;">
									<thead class="thead-dark">
										<tr>
											<th>Register No</th>
											<th>Name</th>
											<th>Course Code</th>
												<th>Course Short Name</th>
												<th>Course Full Name</th>
									
											
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Register No</th>
											<th>Name</th>
											<th>Course Code</th>
												<th>Course Short Name</th>
												<th>Course Full Name</th>
											
											
										</tr>
									</tfoot>
									<tbody>

<?php	
//$aid=$_SESSION['id'];
$ret="select r.regno,r.firstName,r.middleName,r.lastName,r.course,c.course_code,course_sn,course_fn from registration r,courses c where r.course=c.course_fn and r.course='Bachelor  of Science';";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $row->regno;?></td>
<td><?php echo $row->firstName; echo " "; echo $row->middleName ; echo " ";  echo $row->lastName ; ?></td>
<td><?php echo $row->course_code;?></td>
<td><?php echo $row->course_sn;?></td>
<td><?php echo $row->course_fn;?></td>
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
	</div>

</div>
</div>
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
