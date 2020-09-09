<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');
include('checklogin.php');
check_login();
$ai=$_SESSION['id'];
// code for change password
if(isset($_POST['changepwd']))
{
  $op=$_POST['oldpassword'];
  $np=$_POST['newpassword'];
$udate=date('d-m-Y h:i:s', time());;
	$sql="SELECT password FROM userregistration where password=?";
	$chngpwd = $mysqli->prepare($sql);
	$chngpwd->bind_param('s',$op);
	$chngpwd->execute();
	$chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
	if($row_cnt>0)
	{
		$con="update userregistration set password=?,passUdateDate=?  where id=?";
$chngpwd1 = $mysqli->prepare($con);
$chngpwd1->bind_param('ssi',$np,$udate,$ai);
  $chngpwd1->execute();
		$_SESSION['msg']="Password Changed Successfully !!";
	}
	else
	{
		$_SESSION['msg']="Old Password not match !!";
	}	
	

}
?>
	<meta charset="UTF-8" lang="en">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Change Password</title>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-social.css">
	<link rel="stylesheet" href="../css/bootstrap-select.css">
	<link rel="stylesheet" href="../css/fileinput.min.css">
	<link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../js/validation.min.js"></script>
<script type="text/javascript">
function valid()
{

if(document.changepwd.newpassword.value!= document.changepwd.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.changepwd.cpassword.focus();
return false;
}
return true;
}
</script>

</head>
<body>
	<?php include('profile-header.php');?>
	<style type="text/css">
			.navbar {
				margin-left: 7px;
				padding-top: 18px;
			}




	</style>
	<div class="ts-main-content">
		<?php include('user-sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Change Password </h2>
	
						<div class="row" >
	
								<div class="col-md-10">
								<div class="panel panel-primary">
									<div class="panel-heading">
<?php $result ="SELECT passUdateDate FROM userregistration WHERE id=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$ai);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch(); ?>

									Last Updation Date:&nbsp;<?php echo $result; ?> </div>
									<div class="panel-body" ">
				<form method="post" class="form-horizontal" name="changepwd" id="change-pwd" onSubmit="return valid();">
    <?php            if(isset($_POST['changepwd']))
{ ?>
											<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
                                            <?php } ?>
											<div class="hr-dashed"></div>
											<div class="form-group" style="padding-right: 200px;">
												<label class="col-sm-4 control-label">Old Password </label>
												<div class="col-sm-8">
				<input type="password" value="" name="oldpassword" id="oldpassword" class="form-control" onBlur="checkpass()" required="required">
									 <span id="password-availability-status" class="help-block m-b-none" style="font-size:12px;"></span> </div>
											</div>
											<div class="form-group"style="padding-right: 200px;">
												<label class="col-sm-4 control-label">New Password</label>
												<div class="col-sm-8">
											<input type="password" class="form-control" name="newpassword" id="newpassword" value="" required="required" minlength="6">
												</div>
											</div>
<div class="form-group"style="padding-right: 200px;">
									<label class="col-sm-4 control-label">Confirm Password</label>
									<div class="col-sm-8">
				<input type="password" class="form-control" value="" required="required" minlength="6" id="cpassword" name="cpassword" >
												</div>
											</div>



												<div class="col-sm-6 col-sm-offset-4">
													<input class="btn btn-warning btn-lg" name="changepwd"  type="submit" value="Submit" style="margin-left: -10%;width: 150px; border-radius: 20px; font-size: 20px; outline: none; background-color:  #F2B124; height: 50px; padding-top: 11px;">
													<input class="btn btn-warning btn-lg" name="cancel"  type="submit" value="Cancel" style="margin-left: 5%;width: 150px; border-radius: 20px; font-size: 20px; outline: none; background-color:  #112F41; height: 50px; padding-top: 11px;">
											</div>

										</form>

									</div>
								</div>
							</div>
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap-select.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
	<script src="../js/Chart.min.js"></script>
	<script src="../js/fileinput.js"></script>
	<script src="../js/chartData.js"></script>
	<script src="../js/main.js"></script>

<script>
function checkpass() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'oldpassword='+$("#oldpassword").val(),
type: "POST",
success:function(data){
$("#password-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</body>

</html>