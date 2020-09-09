<?php include('includes/header.php') ?>





<style type="text/css">

.box input[type="date"]
{
  
  padding-left: 160px;
  width: 60%;
}


	
	h2{
        padding-top: 10px;
        padding-bottom: 10px;
         font-family: Trebuchet MS;
font-size: 40px;
color: white;
line-height: 50px;
text-align: center;
margin-top: -10px;
cursor: pointer;

    }

	.signup-form{
        width: 400px;
        margin: 0 auto;

    }
.signup-form input{

  width: 80%;
  height: 40px;
  width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    border:none;
    outline: none;
    background-color: transparent;
    border-bottom: 2px solid white;
    margin-bottom: 30px;

        
    }.signup-form select{

  display: inline-block;
  height: 40px;
  width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    border:none;
    outline: none;
    background-color: transparent;
    border-bottom: 2px solid white;
    margin-bottom: 30px;

    }

     .type-3{  
        display: block;

  width: 30%;
  height: 40px;
  padding: 0px 5%;
  margin-right: 5px;
  margin:0 auto;
  border: none;
  background-color:  #f2b134;
  font-family: sans-serif;
font-size:1.4em ;
color:  solid black;

cursor: pointer;
border-radius: 20px; 
margin-top:20px; 
width: 400px;     
    }




.type-3:hover {
  -webkit-transform: scale(1.3);
  transform: scale(1.1);
  background: darkorange;
  transition: 300ms;
  color: white;
 
}
.type-3:focus {
  outline: none;
 
}



  
    body{
    	background-color:whitesmoke;
    	        background:url("bg2.jpg");
    	        background-size: cover;
    }

    .box{
  
  position: absolute;
  top: 540px;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 75%;
  margin-top: 0px;
  

  padding: 70px 30px;
  background:rgba(0,0,0,0.7);
  box-sizing: border-box;
  box-shadow: 0 10px 18px 0px rgba(0,0,0,.8);
  border-radius: 70px;
  height: 790px;

}



.box img{
  width: 120px;
  height: auto;
  border-radius: 50%;
  position: absolute;
  top: -15px;
  left: calc(50% - 50px);
  margin-top: -50px;
  cursor: pointer;

  
}

#right1{

  margin-top: 0px;
  margin-right: -30px;
}

.box select option{
  color: black;
}

.box img:hover{
  transform: scale(1.3);
  transition: 300ms;
}
    

    .box .mname ,.emailid{

      margin-top: -68px;
    }
.box .cpass{
  margin-top: -60px;
}

.box .cpass{
  margin-top: -70px;
}

.rno{
  margin-top: -20px;
}

</style>


<section class="box" >
	<div class="main-wrapper" style="height: 850px;">
    <img src="register-icon.jpg">
		<h2>Registration</h2>
		<form class="signup-form" action="insert.php" method="post">
      <div class="rno">
			<input type="text" name="regno" id="regno" placeholder="Register Number" required="" pattern="^\S+$"  title="Spaces are not allowed" onkeypress="return blockSpecialChar(event)" style="margin-top: -60px;"></div>
      <div class="fname">
			<input type="text" name="firstname" placeholder="First Name" required="" onkeypress="return numberOnly(this, event)" style="margin-top: -10px; margin-left: -250px;">
    </div>
    <div class="mname">
			<input type="text" name="middlename" placeholder="Middle Name" required="" onkeypress="return numberOnly(this, event)" style="margin-top: -30px; margin-left: 250px; ">
    </div>


			<input type="text" name="lastname" placeholder="Last Name" required="" onkeypress="return numberOnly(this, event)" style="margin-top: -10px;">


<div style="margin-bottom: -33px; padding-left: 5px; font-family: arial;"> <label style="color: white; font-size: 17px; padding-left: -200px;  ">Date of Birth </label></div>
      <input type="date" name="dob" placeholder="Date of Birth" required=""  style="margin-top: -10px;">
			 
       <select name="gender" required="" style="margin-top: -10px;">
			 <option value="">Select Gender</option>
			 <option value="Male">Male</option>
			 <option value="Female">Female</option>
			 <option value="Other">Other</option>
       
			 <input type="text" name="contactno" id="contactno" required="" placeholder="Contact" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" style="margin-top: -10px; margin-left: -250px;">
      <div class="emailid">
			 <input type="text" name="email" id="emailAddress" required="" placeholder="Email Address" style="margin-top: 10px;
       margin-left: 250px; margin-top: -60px;"> 
     </div>
      
			  <input type="password" name="password" id="password" required="" minlength="6"  placeholder="Password" style="margin-top: -15px; margin-left: -250px;">
        <div class="cpass">
        <input type="password" name="password" id="cpassword" required="" minlength="6" placeholder="Confirm Password" style="margin-top: -30px;margin-left: 250px;">
      </div>
			 </select>
			<button class="type-3" type="submit" value="Register" onclick="return Validate()">Sign up</button>
		</form>
	</div>
</section>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
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