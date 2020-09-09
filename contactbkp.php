<?php include('includes/header.php') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">

    .nav{
        width: 100.6%;
    }

    .nav li a:hover{
            text-decoration: none;
    }
    .nav li a{
    padding-top: 18px;
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
</style>

<div id="test">
<div class="container">


   <br>

<h1 >Hostel Contact Details</h1><hr><br>
<img src="images/map.png" style="margin-left: 50%;">

    <div class="card" style="width: 400px;margin-left: 0%;border-width: 5px; margin-top: -350px;">
  <img class="card-img-top" src="canvas.png" style="width: 250px;height: auto; margin-left: 70px;" alt="Card image cap">
  <div class="card-body">
    <h5><div class="card-title">
        The BKK Hostel
    </div></h5>
    <h6 class="card-subtitle mb-2 text-muted">Email &nbsp;&nbsp;&nbsp;&nbsp;: </h6><p style="margin-top: -30px;margin-left: 75px;">thebkkhostelinfo@gmail.com</p>
    <h6 class="card-subtitle mb-2 text-muted">Contact : </h6><p style="margin-top: -30px;margin-left: 70px;">+91-80-555555 / +91-80-565656</p>
    <h6 class="card-subtitle mb-2 text-muted">Website : </h6><p style="margin-top: -30px;margin-left: 75px;">www.thebkkcollege.com </p>
    
  </div>

</div><br>


<h1 >Administrator Contact Details</h1><hr><br>
<table class="table table-borderless table-dark" style="text-align: center;">
  <thead style="background-color:#eb4124">
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Brinda N Murthy</td>
      <td>+91-8317412887</td>
      <td>brinda@gmail.com</td>
    </tr>
    <tr>
      
      <td>Kiran Saravana</td>
      <td>+91-9945920557</td>
      <td>kiran@gmail.com</td>
    </tr>
     <tr>
      
      <td>Kishan Shetty</td>
      <td>+91-7654567865</td>
      <td>kishan@gmail.com</td>
    </tr>
  </tbody>
</table>
</div>
<?php include('includes/footer.php') ?>