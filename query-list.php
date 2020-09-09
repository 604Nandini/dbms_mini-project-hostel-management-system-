<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

#slide {  
  /* This section calls the slideInFromLeft animation we defined above */
  animation: 1s ease-out 0s 1 slideInFromLeft;
  }

.nav{
		width: 100.6%;
	}
	.nav li a:hover{
		text-decoration: none;
	}
	.nav li a{
		padding-top: 18px;
	}
	
 	#test  {
    animation: fadein 2000ms;
    -moz-animation: fadein 2000ms; /* Firefox */
    -webkit-animation: fadein 2000ms; /* Safari and Chrome */
    -o-animation: fadein 2000ms; /* Opera */
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
<div id="test">
<div class="container">
	<div class="jumbotron" style="margin-top: 10px;">
	<p class="display-4 bk-info" >General Queries Relating to Hostel Database</p>
</div>
<div id="slide">
<ol>

	<h4><li>List of Students who booked hostel  between '2018-09-01' and '2018-12-31' and also view the expiry date of stay by using Triggers.</li></h4><br><br><br>
	<a class="btn btn-warning btn-lg" href="query1.php" role="button" style="margin-top: 5px;">Get List</a><br><br>
	<hr>

	<h4><li>List of Students who opted with and without Food.</li></h4><br><br>

    <h4>With Food &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query2-wf.php" role="button" style="margin-top: 5px;">Get List</a></h4> <br>

	<h4>Without Food &nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query2-wof.php" role="button" style="margin-top: 5px;margin-left: 2px;">Get List</a></h4> <br>
	<hr>
	
	


	<h4><li>List of Students From Respective Courses.</li></h4><br><br>

    <h4>B.Tech &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query4btech.php" role="button" style="margin-top: 5px;margin-left: -20px">Get List</a></h4> <br>

    <h4>BSC &nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query4bsc.php" role="button" style="margin-top: 5px;margin-left: 46px;">Get List</a></h4> <br>

     <h4>BCA &nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query4bca.php" role="button" style="margin-top: 5px;margin-left: 42px;">Get List</a></h4> <br>

      <h4>BE &nbsp;&nbsp; <a class="btn btn-warning btn-lg" href="query4be.php" role="button" style="margin-top: 5px;margin-left: 60px;">Get List</a></h4> <br>
    <hr>

     

</ol>
</div>
</div>
</div>