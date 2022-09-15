

<?php 
function createRows() {
  global $connection;
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $notes = $_POST['notes'];

  $name = mysqli_real_escape_string($connection, $name );
  $notes = mysqli_real_escape_string($connection, $notes );

  $query = "SELECT * FROM notes";
  $query = "INSERT INTO notes(Name, Notes) VALUES ('$name', '$notes')";
  
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
   die('Query Failed');
    } else {
      echo "record created";
    }
  }
}

?>
<?php
function allUsers() {
  global $connection;
  $query = "SELECT * FROM notes";
  $result = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($result)){
      ?>
  <pre>
      <?php
  print_r($row);
  ?>
  </pre>
  <?php
  }
}
?>

<?php 
function getNotes(){
global $connection;
$query = "SELECT Name, Notes, Timestamp FROM notes";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
 
echo $row['Name'] . "<br>" . $row["Notes"] . "<br>" . $row["Timestamp"] . "<hr>";    
    }

}


}
?>