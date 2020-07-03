<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conchos_sisig";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
  $sql = "INSERT INTO users (name, email, pass,address, contact) VALUES
('$_POST[name]','$_POST[email]','$_POST[pass]','$_POST[address]','$_POST[contact]')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro Realizado com Sucesso";
    echo '<meta http-equiv="refresh" content="1;url=http://localhost/OnlineFoodOrdering-master/">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>		