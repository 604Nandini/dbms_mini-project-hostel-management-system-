<?php
session_start();
include('config.php');
include('checklogin.php');
check_login();
//code for registration
if(isset($_POST['submit']))
{
$roomno=$_POST['room'];
$seater=$_POST['seater'];
$feespm=$_POST['fpm'];
$foodstatus=$_POST['foodstatus'];
$stayfrom=$_POST['stayf'];
$duration=$_POST['duration'];
$course=$_POST['course'];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$emcntno=$_POST['econtact'];
$gurname=$_POST['gname'];
$gurrelation=$_POST['grelation'];
$gurcntno=$_POST['gcontact'];
$caddress=$_POST['address'];
$ccity=$_POST['city'];
$cstate=$_POST['state'];
$cpincode=$_POST['pincode'];
$paddress=$_POST['paddress'];
$pcity=$_POST['pcity'];
  $pstate=$_POST['pstate'];
$ppincode=$_POST['ppincode'];
$query="insert into  registration(roomno,seater,feespm,foodstatus,stayfrom,duration,course,regno,firstName,middleName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,corresPincode,pmntAddress,pmntCity,pmnatetState,pmntPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iiiisissssssisississsisssi',$roomno,$seater,$feespm,$foodstatus,$stayfrom,$duration,$course,$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$emcntno,$gurname,$gurrelation,$gurcntno,$caddress,$ccity,$cstate,$cpincode,$paddress,$pcity,$pstate,$ppincode);
$stmt->execute();
echo"<script>alert('Student Succssfully register');</script>";
}
?> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  <title>Student Hostel Registration</title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">>
  <link rel="stylesheet" href="../css/bootstrap-social.css">
  <link rel="stylesheet" href="../css/bootstrap-select.css">
  <link rel="stylesheet" href="../css/fileinput.min.css">
  <link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>

function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'roomid='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>



<body>
  <?php include('profile-header.php');?>
  <?php include('user-sidebar.php');?>
 <style>

 .navbar{
  width: 100%;
  position: relative;
 }
 .navbar ul{
  position: absolute;   
 }
body {
    font-family: arial, sans-serif;
    background-color: white;
}

.sidenav{

  margin-top: 47px;
  height: 450%;
  position: absolute;
}



.regbutton{
  width: 120px;
  height: 40px;
  border: 4px,4px,4px,4px;
  border-radius: 7px;
  color: black;
  background-color: #F2B124
}

.regbutton:hover{

  background-color: black;
  color: white;
}


.cancelbutton{
 width: 120px;
  height: 40px;
  border: 4px,4px,4px,4px;
  border-radius: 7px;
  color: black;
  background-color: #F2B124;


}

.cancelbutton:hover{
  background-color: black;
  color: white;

}



.checkbutton{
  width: 200px;
  height: 40px;
  border: 4px,4px,4px,4px;
  border-radius: 11px;
  color: black;
  background-color: #F2B124;

  margin-left: 400px;

}

.checkbutton:hover{
background-color: black;
  color: white;

}
/* Fixed sidenav, full height */

.container{
 margin-left: -5px;
  margin-top: 2250px;
}

  
.subcontainer{
  position: absolute;

  width: 90%;
}

.container .col-md-12 h2{
margin-right: 180px;
}
.navbar{
  margin-left:7px;   
}

</style>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
  <div class="ts-main-content" style="margin-top:-190%;">
   
    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="container" style="width: 100%;">
          <div class="col-md-12">
          
            <h2 class="page-title" align="left">Registration </h2>

            <div class="subcontainer">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">Fill All Info</div>
                  <div class="panel-body">
                    <form method="post" action="" class="form-horizontal">
              <?php
$uid=$_SESSION['login'];
               $stmt=$mysqli->prepare("SELECT emailid FROM registration WHERE emailid=? ");
        $stmt->bind_param('s',$uid);
        $stmt->execute();
        $stmt -> bind_result($email);
        $rs=$stmt->fetch();
        $stmt->close();
        if($rs)
        { ?><div >
      <h3 style="color: red" align="left">Hostel Already Booked By You</h3>
      <b><a href="room-details.php" style="color: green;">Click here to view your Room details and Payment information</a></b>
      </div>
        <?php }
        else{
              echo "";
              }     
              ?>      
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Related Info </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room no. </label>
<div class="col-sm-8">
<select name="room" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select Room</option>
<?php $query ="SELECT * FROM rooms";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
<?php } ?>
</select> 
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>


                      
<div class="form-group">
<label class="col-sm-2 control-label">Seater</label>
<div class="col-sm-8">
<input type="text" name="seater" id="seater"  class="form-control"  >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Fees Per Month</label>
<div class="col-sm-8">
<input type="text" name="fpm" id="fpm"  class="form-control" >
</div>
</div>

<input class="btn btn-warning btn-lg" name="submit"  type="submit" value="Check Availability" style="margin-left: 40%;width: 200px; border-radius: 20px; font-size: 20px; outline: none; background-color:  #F2B124; height: 50px; padding-top: 11px;">
<br><br>


<div class="form-group">
<label class="col-sm-2 control-label">Food Status</label>
<div class="col-sm-8">
<input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
<input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
</div>
</div>  

<div class="form-group">
<label class="col-sm-2 control-label">Stay From</label>
<div class="col-sm-8">
<input type="date" name="stayf" id="stayf"  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Duration</label>
<div class="col-sm-8">
<select name="duration" id="duration" class="form-control">
<option value="">Select Duration in Month</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label"><h4 style="color: green" align="left">Personal Info </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">course </label>
<div class="col-sm-8">
<select name="course" id="course" class="form-control" required> 
<option value="">Select Course</option>
<?php $query ="SELECT * FROM courses";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->course_fn;?>"><?php echo $row->course_fn;?>&nbsp;&nbsp;(<?php echo $row->course_sn;?>)</option>
<?php } ?>
</select> </div>
</div>

<?php 
$aid=$_SESSION['id'];
  $ret="select * from userregistration where id=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('i',$aid);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>

<div class="form-group">
<label class="col-sm-2 control-label">Registration No : </label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" value="<?php echo $row->regNo;?>" readonly >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" value="<?php echo $row->firstName;?>" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname"  class="form-control" value="<?php echo $row->middleName;?>"  readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" value="<?php echo $row->lastName;?>" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<input type="text" name="gender" value="<?php echo $row->gender;?>" class="form-control" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact" value="<?php echo $row->contactNo;?>"  class="form-control" readonly>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" value="<?php echo $row->email;?>"  readonly>
</div>
</div>
<?php } ?>
<div class="form-group">
<label class="col-sm-2 control-label">Emergency Contact: </label>
<div class="col-sm-8">
<input type="text" name="econtact" id="econtact"  class="form-control" required="required" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Name : </label>
<div class="col-sm-8">
<input type="text" name="gname" id="gname"  class="form-control" required="required" onkeypress="return numberOnly(this, event)">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Relation : </label>
<div class="col-sm-8">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required" onkeypress="return numberOnly(this, event)">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)">
</div>
</div>  

<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Correspondense Address </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="address"  id="address" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required" onkeypress="return numberOnly(this, event)">
</div>
</div>  

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="state" id="state"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>              

<div class="form-group">
<label class="col-sm-2 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="text" name="pincode" id="pincode"  class="form-control" required="required" maxlength="6" minlength="6" onkeypress="return isNumberKey(event)">
</div>
</div>  

<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Permanent Address </h4> </label>
</div>


<div class="form-group">
  <input type="checkbox" name="adcheck" value="1"/>
<label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
<div class="col-sm-4">

</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="paddress"  id="paddress" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="pcity" id="pcity"  class="form-control" required="required" onkeypress="return numberOnly(this, event)">
</div>
</div>  

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="pstate" id="pstate"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>              

<div class="form-group">
<label class="col-sm-2 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="text" name="ppincode" id="ppincode"  class="form-control" required="required" maxlength="6" minlength="6" onkeypress="return isNumberKey(event)">
</div>
</div>  


<div class="col-sm-6 col-sm-offset-4">
<input class="btn btn-warning btn-lg" name="submit"  type="submit" value="Submit" style="margin-left: -10%;width: 150px; border-radius: 20px; font-size: 20px; outline: none; background-color:  #F2B124; height: 50px; padding-top: 11px;">
<input class="btn btn-warning btn-lg" name="submit"  type="submit" value="Cancel" style="margin-left: 10%;width: 150px; 
border-radius:20px; font-size: 20px; outline: none; background-color:  #112F41; height: 50px; padding-top: 11px;">

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

</body>
<script type="text/javascript">
  $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
  <script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


<script type="text/javascript">

$(document).ready(function() {
  $('#duration').keyup(function(){
    var fetch_dbid = $(this).val();
    $.ajax({
    type:'POST',
    url :"ins-amt.php?action=userid",
    data :{userinfo:fetch_dbid},
    success:function(data){
      $('.result').val(data);
    }
    });
    

})});
</script>

<script>
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}   


   function numberOnly(txt, e) {
            var arr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            var code;
            if (window.event)
                code = e.keyCode;
            else
                code = e.which;
            var char = keychar = String.fromCharCode(code);
            if (arr.indexOf(char) == -1)
                return false;
        }
        
  </script>

   <script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
