<?php
class Database {
  private $dsn = "mysql:host=localhost;dbname=history";
  private $user="root";
  private $pass="";
  public $conn;

//Connection Established With Database
  public function __construct(){
    try {
      $this->conn = new PDO($this->dsn,$this->user,$this->pass);
      // echo "Successfully Connected";

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

//------------------------------------------

//ADD Data to the Data Base
public function insert($time,$place,$event,$history_data,$source,$note){
  $sql = "INSERT INTO tbl_order (time,place,event,history_data,source,note) VALUES (:time, :place, :event, :history_data, :source, :note)";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['time'=>$time, 'place'=>$place, 'event'=>$event, 'history_data'=>$history_data, 'source'=>$source, 'note'=>$note]);
  return true;
}

//------------------------------------------

//Read Data From the DataBase

public function read(){
  $data = array();
  $sql = "SELECT * FROM tbl_order";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    $data[] = $row;
  }
  return $data;
}
//------------------------------------------

// GET DATA FROM ID
public function getDataById($rid){
  $sql = "SELECT * FROM tbl_order WHERE rid= :rid";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['rid'=>$rid]);
  $result= $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
//------------------------------------------

//UPDATE THE ENTRIES

public function update($rid,$time,$place,$event,$history_data,$source,$note){
  $sql = "UPDATE tbl_order SET time = :time, place = :place, event = :event, history_data = :history_data, source = :source, note = :note WHERE rid=:rid";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['time'=>$time, 'place'=>$place, 'event'=>$event, 'history_data'=>$history_data, 'source'=>$source, 'note'=>$note, 'rid'=>$rid]);
  return true;
}

//------------------------------------------

//DELETE THE Entries

public function delete($rid){
  $sql = "DELETE FROM tbl_order WHERE rid = :rid";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['rid'=>$rid]);
  return true;
}

//------------------------------------------


//COUNTING ROWS
public function totalRowCount(){
  $sql = "SELECT * FROM tbl_order";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $t_rows = $stmt->rowCount();
  return $t_rows;
}

//------------------------------------------

public function datebetween($txtStartDate,$txtEndDate){
  $sql = "SELECT * FROM tbl_order WHERE time BETWEEN '$txtStartDate' AND '$txtEndDate'";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    $data[] = $row;
  }
  return $data;

}
//------------------------------------------
public function reportDaily($reportMonth,$reportDate){
  $sql= "SELECT * FROM tbl_order WHERE MONTH(time)= $reportMonth AND DAY(time)= $reportDate";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    $data[] = $row;
  }
  return $data;



}










//------------------------------------------
}

// $ob =new Database();
// print_r( $ob->read());
// echo $ob->totalRowCount();
 ?>
