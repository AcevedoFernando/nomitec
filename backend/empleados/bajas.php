<?php
//include ('../conexionmysql.php');


//$id=$_GET['id'];
//$conn=new mysqli($server,$username,$password,$db);
//$borrar=" DELETE FROM empleados WHERE id='$id'";
//if ($conn->query($sql) == TRUE) {
//	echo "si se borro mi rega";
//}else{
//	"al chile no borro".$conn->error;
//}
//$conn->close();
//header('location: /nomitec/views/empleados/empleados.php');
//?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomitec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>