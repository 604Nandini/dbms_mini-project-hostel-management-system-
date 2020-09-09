<?php
$connect = mysqli_connect("localhost","root","","demo");
if(isset($_POST["submit"]))
{
	$sql = "CALL insertdata('".$_POST["name"]."','".$_POST["email"]."', '".$_POST["message"]."' )";
	if (mysqli_query($connect, $sql)) {
		echo "<script>alert('Thank you for your feedeback')</script>";
		header("location:index.php");

	}

}

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<?php include('includes/header.php') ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.nav{
    width: 100.6%;
}


    .nav li{
        padding-top: 5px;
        font-size: 17px;
    }
#test  { animation: fadein 700ms;
    -moz-animation: fadein 700ms; /* Firefox */
    -webkit-animation: fadein 700ms; /* Safari and Chrome */
    -o-animation: fadein 700ms; /* Opera */
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=email], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}





.container {
	margin-left:15%;
	width: 70%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<br><br><br>
<div class="container" style="border-radius: 20px;border: 4px solid gray;">
	<h2 align="center" style="font-family: serif Helvetica;">Feedback Form </h2>

    <div id="test">
  <form action="" method="post"> 

    <div class="form-group">
    <label>Enter Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required="" onkeypress="return numberOnly(this, event)">
  </div>  

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required="">
  </div>

  
  <div class="form-group">
    <label>Enter Your Message</label>
    <textarea class="form-control"name="message" placeholder="Your feedback" rows="3" required=""  maxlength="75"   ></textarea>
  </div>
  <input class="btn btn-warning btn-lg" name="submit"  type="submit" value="Submit" style="margin-left: 38%;width: 200px; border-radius: 50px;">
</form>
</div>

</div>
<script type="text/javascript">
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
	<?php include('includes/footer.php') ?>