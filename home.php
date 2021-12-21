<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Header  -->


  <head>
    <meta charset="utf-8">
    <meta name= 'author' content="Sujith Rex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Record Management System</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

</head>



<!-- Body  -->

<body>


  <!-- NAV BAR -->


    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><i class="fab fa-wolf-pack-battalion"></i>&nbsp Record Management System</a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Entries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Filter</a>
      </li>
    </ul>
  </div>
</nav>





<div class='container mt-4'>
  <div class='row'>
    <div class='col-md-4'>

    </div>
    <div class='col-md-8'>
      <div class="jumbotron">
        <h1 class="display-4">Record Management System</h1>
        <hr class="my-4">
        <p class="lead">In this project we track the records of history using PHP and MySQL. <br /> This Model was adapted by Late.Rev.D.A.Christdoss <br /> Developer : Sujith Rex (github: sujithrex)</p>
      </div>
    </div>
  </div>
  <h4 class="mt-2 text-primary">Today's Events in History</h4>
  <div class="table-responsive" id="showRecord">
    <h3 class="text-center text-success" style="margin-top:150px;">Reporting Data From Database</h3>

</div>
</div>

























<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets\fontawsome\js\all.js" crossorigin="anonymous"></script>
<script type="text/javascript">


$(document).ready(function(){
  dailyReport();
  function dailyReport(){
    $.ajax({
      url: "action.php",
      type : "POST",
      data: {action:"report"},
      success:function(response){
        console.log(response);
        $("#showRecord").html(response);
      }
    });
  }
});




</script>


  </body>
</html>
