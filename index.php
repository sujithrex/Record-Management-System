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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Entries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Filter</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Cotnainer  -->


<div class="container">
  <div class="row"><div class="col-lg-12">
    <h4 class="text-center text-danger font-weight-normal my-3">Record Management System</h4>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h4 class="mt-2 text-primary">All Entries in the database</h4>
    </div>
    <div class="col-lg-6">
      <button type="button" name="button" class="btn btn-primary m-1 float-right" data-toggle = "modal" data-target="#addModal"> <i class=" fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;Add New Entry</button>
      <a href="action.php?export=excel" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp; Export to Excel</a>
    </div>

  </div>


  <!-- TABLE  -->


  <hr class="my-1" />
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive" id="showRecord">
        <h3 class="text-center text-success" style="margin-top:150px;">Reporting Data From Database</h3>
    <!-- <table class="table table-striped table-sm table-bordered">
      <thead>
        <tr class="text-center">
          <th>Unique ID</th>
          <th>Time Stamp</th>
          <th>Event</th>
          <th>Historical Record</th>
          <th>Bibliography</th>
          <th>Note</th>
          <th>Actions</th>
        </tr>
      </thead> -->
    <!-- </table> -->

  </div>
</div>
</div>
</div>








<!-- Add New Entry -->

  <div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Entry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body px-4">
          <form action="" method="post"id="form-data">
            <div class="form-group">
              <input type="text" name="time" placeholder="Time Stamp" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="place" placeholder="Place" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="event" placeholder="Event" required class="form-control">
            </div>
              <div class="form-group">
              <input type="text" name="history_data" placeholder="Record" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="source" placeholder="Source" required class="form-control">
            </div>
              <div class="form-group">
              <input type="text" name="note" placeholder="Note" required class="form-control">
            </div>
            <div class="form-group">
            <input type="submit" name="insert" id="insert" value="Add Entry" class="btn btn-danger btn-block">
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>







  <!-- Edit Modal -->

    <div class="modal fade" id="editModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit Entry</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body px-4">
            <form action="" method="post"id="edit-form-data">
              <input type="hidden" name="rid" id="rid" />
              <div class="form-group">
                <input type="text" name="time" id="time" required class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="place" id="place" required class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="event" id="event" required class="form-control">
              </div>
                <div class="form-group">
                <input type="text" name="history_data" id="history_data" required class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="source" id="source" required class="form-control">
              </div>
                <div class="form-group">
                <input type="text" name="note" id="note" required class="form-control">
              </div>
              <div class="form-group">
              <input type="submit" name="insert" id="update" value="Update" class="btn btn-primary btn-block">
            </div>
            </form>
          </div>

        </div>
      </div>
    </div>





<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets\fontawsome\js\all.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">

$(document).ready(function(){
  showAllEntries();
  function showAllEntries(){
    $.ajax({
      url: "action.php",
      type : "POST",
      data: {action:"view"},
      success:function(response){
        // console.log(response);
        $("#showRecord").html(response);
        $("table").DataTable();
      }
    });
  }
  // insert ajax Request

  $("#insert").click(function(e){
    if($("#form-data")[0].checkValidity()){
      e.preventDefault();
      $.ajax({
        url: "action.php",
        type: "POST",
        data: $("#form-data").serialize()+"&action=insert",
        success:function(response){
          Swal.fire({
            title: 'Entry added successfully!',
            type: 'success'
          })
          $("#addModal").modal('hide');
          $("#form-data")[0].reset();
          showAllEntries();
        }
      });
    }
  });

  // edit Entry
  $("body").on("click", ".editBtn", function(e){
    e.preventDefault();
    edit_id = $(this).attr('id');
    $.ajax({
      url: "action.php",
      type: "POST",
      data:{edit_id:edit_id},
      success:function(response){
        data = JSON.parse(response);
        $("#rid").val(data.rid);
        $("#time").val(data.time);
        $("#place").val(data.place);
        $("#event").val(data.event);
        $("#history_data").val(data.history_data);
        $("#source").val(data.source);
        $("#note").val(data.note);
      }
    });
  });

  // Update ajax Request

  $("#update").click(function(e){
    if($("#edit-form-data")[0].checkValidity()){
      e.preventDefault();
      $.ajax({
        url: "action.php",
        type: "POST",
        data: $("#edit-form-data").serialize()+"&action=update",
        success:function(response){
          Swal.fire({
            title: 'Entry updated successfully!',
            type: 'success'
          })
          $("#addeditModal").modal('hide');
          $("#edit-form-data")[0].reset();
          showAllEntries();
        }
      });
    }
  });


  //
  // Delete



  $("body").on("click", ".delBtn", function(e){
    e.preventDefault();
    var tr =$(this).closest('tr');
    del_id = $(this).attr('id');
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url:"action.php",
          type:"POST",
          data:{del_id:del_id},
          success:function(response){
            tr.css('background-color', '#ff6666');
            Swal.fire(
              'Deleted!!',
              'Entry Deleted Successfully',
              'success'
            )
            showAllEntries();
          }
        });
      }
    });
  });

//
// Show Entry Details
$("body").on("click", ".infoBtn", function(e){
  e.preventDefault();
  info_id = $(this).attr('id');
  $.ajax({
    url: "action.php",
    type: "POST",
    data:{info_id:info_id},
    success:function(response){
      // console.log(response);
      data=JSON.parse(response);
      Swal.fire({
        title: '<strong>Entry Details : ID(' +data.rid+')</strong>',
        type:'info',
        html: '<b>Time Stamp :</b>' +data.time+'<br /><b>Place :</b>' +data.place+'<br /><b>Event :</b>' +data.event+'<br /><b>Historical Record :</b><br />' +data.history_data+'<br /><b>Bibliography :</b>' +data.source+'<br /><b>Note :</b>' +data.note+'<br />',
        showCancelButton: true,


      });
    }
  });
});





});
</script>




  </body>
</html>
