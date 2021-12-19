<?php
require_once 'db.php';
$db = new Database();

if(isset($_POST['action']) && $_POST['action'] == "view"){
  $output = '';
  $data = $db->read();
  if($db->totalRowCount()>0){
    $output .= '<table class="table table-striped table-sm table-bordered">
      <thead>
        <tr class="text-center">
          <th>Unique ID</th>
          <th>Time Stamp</th>
          <th>Place</th>
          <th>Event</th>
          <th>Historical Record</th>
          <th>Bibliography</th>
          <th>Note</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>';
      foreach ($data as $row) {
        $output .=
        '<tr class= "text-center text-secondary">
        <td>'.$row['rid'].'</td>
        <td>'.$row['time'].'</td>
        <td>'.$row['place'].'</td>
        <td>'.$row['event'].'</td>
        <td>'.$row['history_data'].'</td>
        <td>'.$row['source'].'</td>
        <td>'.$row['note'].'</td>
        <td>
        <a href="#" title="View Details" class = "text-success infoBtn" id= "'.$row['rid'].'"><i class= "fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
        <a href="#" title="Edit" class = "text-primary editBtn" id= "'.$row['rid'].'" data-toggle="modal" data-target= "#editModal"><i class= "fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
        <a href="#" title="Delete" class = "text-danger delBtn"id= "'.$row['rid'].'"><i class= "fas fa-trash-alt fa-lg"></i></a>
        </td></tr>';
      }
      $output .='</tbody></table>';
      echo $output;
  }
  else {
    echo '<h3 class="text-center text-secondary mt-5"> :) No Record Found in the DataBase!! </h3>';
  }
}



if(isset($_POST['action']) && $_POST['action'] == "insert"){
  $time = $_POST['time'];
  $place = $_POST['place'];
  $event = $_POST['event'];
  $history_data = $_POST['history_data'];
  $source = $_POST['source'];
  $note = $_POST['note'];

  $db->insert($time,$place,$event,$history_data,$source,$note);
}

if(isset($_POST['edit_id'])){
  $id = $_POST['edit_id'];
  $row = $db->getDataById($id);
  echo json_encode($row);
}

if(isset($_POST['action']) && $_POST['action'] == "update"){
  $rid= $_POST['rid'];
  $time = $_POST['time'];
  $place = $_POST['place'];
  $event = $_POST['event'];
  $history_data = $_POST['history_data'];
  $source = $_POST['source'];
  $note = $_POST['note'];

  $db->update($rid,$time,$place,$event,$history_data,$source,$note);
}

if(isset($_POST['del_id'])){
  $id = $_POST['del_id'];
  $db->delete($id);
}


if(isset($_POST['info_id'])){
  $id = $_POST['info_id'];
  $row = $db->getDataById($id);
  echo json_encode($row);
}



if(isset($_GET['export']) && $_GET['export'] == "excel"){
  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=dataentry.xls");
  header("Pragma: no-cache");
  header("Expires: 0");

  $data= $db->read();
  echo '<table border="1">';
  echo '<tr>
  <th>UniqueID</th>
  <th>Time Stamp</th>
  <th>Place</th>
  <th>Event</th>
  <th>Record</th>
  <th>Source</th>
  <th>Note</th>
  </tr>';
  foreach ($data as $row ) {
    echo'<tr>
    <td>'.$row['rid'].'</td>
    <td>'.$row['time'].'</td>
    <td>'.$row['place'].'</td>
    <td>'.$row['event'].'</td>
    <td>'.$row['history_data'].'</td>
    <td>'.$row['source'].'</td>
    <td>'.$row['note'].'</td>
    </tr>';
  }
  echo '</table>';
}


 ?>
