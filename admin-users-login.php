	<?php include('includes/header.php') ?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
.nav li a {
	
	font-size:17px;
	padding-top: 17px;
}
.nav{
	height: 55px;
	width: 100.6%;
}
	#test  {
    animation: fadein 500ms;
    -moz-animation: fadein 500ms; /* Firefox */
    -webkit-animation: fadein 500ms; /* Safari and Chrome */
    -o-animation: fadein 500ms; /* Opera */
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
	




	.brinda-container{
		background-color: #0372e4;
		width: 30%;
		float: left;
		height: 300px;
		margin-top: 0px;
		margin-left: 25px;
		border-radius: 10px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 	
		

	}

	.kiran-container{
		background-color: #ca012b;
		width: 30%;
		margin-left: auto;
		margin-right: auto;
		height: 300px;	
		margin-top: 66px;
		border-radius: 10px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
		
	}
	.kishan-container{
		
		background-color: #e49b0f;
		width: 30%;
		float: right;
		 right: 0px;
		height: 300px;
		margin-top: -300px;
		margin-right: 25px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
		border-radius: 10px;
		
			
	}
	h1{
		font-family: arial;
		text-align: center;
		color: #555;
		margin-bottom: 10px;
		font-size: 50px;
	}

		.content{
			color: white;
			text-align: center;
			padding-top:20%;
			font-size: 40px;
			font-family: arial;
		}
		.usn{
			color: white;
			text-align: center;
			margin-top: 0px;
			font-size: 25px;
			font-family: arial;
		}
		
button{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  height:60px;
  font-size:1.6em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 


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


</style>

	<h1>Administrators</h1>
	<div id="test">
	<form action="admin/admin-brinda-login.php">
	
<div class="brinda-container">
	<div class="content">
Manasa G B<br>

</div>
<p class="usn">1CG17CS051</p>
<button>Login <i class="fa fa-angle-double-right fa-lg"></i></button>	
</div>
</form>
<form action="admin/admin-kiran-login.php">
<div class="kiran-container">
	<div class="content">
	Mala Nandini<br>
	
</div>
<p class="usn">1CG17CS050</p>
<button>Login <i class="fa fa-angle-double-right fa-lg"></i></button>
</div>
</form>


<form action="admin/admin-kishan-login.php">
<div class="kishan-container">
	<div class="content">
	Kishan<br>
	
</div>
<p class="usn">1CG17CS001</p>
<button >Login <i class="fa fa-angle-double-right fa-lg"></i></button>
</div>

</form>
</div>

	
