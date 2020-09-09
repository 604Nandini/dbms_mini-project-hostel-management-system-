<?php include('admin-login-header.php') ?>

<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
				$stmt->bind_param('sss',$username,$username,$password);
				$stmt->execute();
				$stmt -> bind_result($username,$username,$password,$id);
				$rs=$stmt->fetch();
				$_SESSION['id']=$id;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
                //  $insert="INSERT into admin(adminid,ip)VALUES(?,?)";
   // $stmtins = $mysqli->prepare($insert);
   // $stmtins->bind_param('sH',$id,$uip);
    //$res=$stmtins->execute();
					header("location:dashboard.php");
				}

				else
				{
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
			}
				?>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  

<style type="text/css">
			#test  {
     animation: fadein 400ms;
    -moz-animation: fadein 400ms; /* Firefox */
    -webkit-animation: fadein 400ms; /* Safari and Chrome */
    -o-animation: fadein 400ms; /* Opera */
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

		input{
			letter-spacing: 1px;
			font-size: 25px;
		}

	.kiran-container{
		background-color: #ca012b;

		width: 40%;
		
		height: 400px;
		margin:auto;
		margin-top: 100px;
		border-radius: 10px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.7);
 
		
		

	}

		.content{
			color: #fff;
			text-align: center;
			padding-top:5%;
			font-size: 40px;
			font-family: arial;
		}
		.usn{
			color: white;
			text-align: center;
			margin-top: 35px;
			margin-bottom: -35px;
			font-size: 25px;
			font-family: arial;
		}
		
button{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  height:50px;
  font-size:1.6em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  margin-left:32%;
  margin-top: 20%;


}
button:hover{
  background:#fff;
  color:#1AAB8A;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}

.password{
	margin-left: 24%;
	height: 30px;
	}


@import url('https://fonts.googleapis.com/css?family=Roboto');
@import url('https://fonts.googleapis.com/css?family=Andada|Permanent+Marker|Raleway:300');

#namer {
 position: relative;
 max-width: 230px;
 margin: 5% 38% 15px auto;

}

#namer input {
 border: 0;
 border-bottom: 3px solid #650116;
 width: 150%;
 font-size: 30px;
 height: 70px;
 text-align: center;
 margin-bottom: -30%;
 background: transparent;

 
}

#namer input:focus::-webkit-input-placeholder 
{
  transition: color .4s;
 color:transparent; 
}
#namer input:focus {
 outline: 0;
	color: #BBDEFB;
}

#namer input::placeholder {
 color: #650116;
 font-size: 20px; 
}


</style>




<div id="test">
<form action="" method="post">

<div class="kiran-container">
	<div class="content">
		<br>
	Kiran Saravana <br>
 <div class="id" style="">
<input class="email" type="text" name="username" value="kiran" readonly="readonly" style="display: none;">
</div> 
	
</div>
<p class="usn">1OX16CS035</p>

<div id="namer">
  <div id="namer-input">
   <input type="password" name="password" placeholder="Enter Password" style="color: white;">
  </div>
  <div class="namer-controls">
  </div>
 </div>
<!--
<input class="password" type="password" name="password"><br> -->	
<button name="login">Login <i class="fa fa-angle-double-right fa-sm"></i></button>
</div>
</div>
</form>