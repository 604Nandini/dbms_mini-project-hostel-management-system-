<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
body {
    font-family: arial, sans-serif;
    background-color: white;
}

/* Fixed sidenav, full height */
.sidenav {
    margin-top: 45px;
    height: 100%;
    width: 230px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #112F41;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: inline-block;
    border: none;
    background:none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
      transition: background-color .3s;

}

/* On mouse-over */
.sidenav a:hover{ 
    color: white;
    background-color: #068587;
    text-decoration: none;
    

}
.sidenav a:focus{
  text-decoration: none;
  color: white;
}
.dropdown-btn:hover {
  background-color: #068587;
 color: #f1f1f1;
}

/* Main content */

/* Add an active class to the active dropdown button */
.active {
    background-color: #058587;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #045556;
    margin-left: -40px;
}
/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}
.dropdown-container ul a:hover{
background-color: #056d6f;
}
.menu{
  background-color: #F2B124;
  margin-top: -20px;
  padding-left: 80px;
  color: white;
}

</style>
<div class="sidenav">
  <ul class="menu">  <i class="fa fa-bars " style="margin-left: -70px;"></i>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Menu</ul>
  <a href="dashboard.php">Dashboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dashboard"></i> </a>
  <button class="dropdown-btn">Students <i class="fa fa-caret-down " ></i> </button>
  <div class="dropdown-container">
   <ul class="dropdown-links" style="margin-top: 0px;"> 
    <a href="manage-students.php">Manage Students</a>
 <a href="access-log.php">Student Access Log</a>
 <a href="admin-payment.php">Student Payment</a>
</ul>
  </div>
    <button class="dropdown-btn">Rooms <i class="fa fa-caret-down " ></i></button>
  <div class="dropdown-container">
   <ul class="dropdown-links" style="margin-top: 0px;"> 
   <a href="create-room.php">Add Rooms</a>
    <a href="manage-rooms.php">Manage Rooms</a></ul>
  </div>
  <button class="dropdown-btn">Courses <i class="fa fa-caret-down " ></i></button>
  <div class="dropdown-container">
   <ul class="dropdown-links" style="margin-top: 0px;"> 
   <a href="add-courses.php">Add Courses</a>
    <a href="manage-courses.php">Manage Courses</a></ul>
  </div>
  
   
   <a href="admin-feedback.php">Feedback Details &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments " ></i></a>
  
</div>
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

