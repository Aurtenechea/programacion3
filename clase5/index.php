<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "ejemplouno");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$consulta_text = "select * from usuario";

if ($consulta = mysqli_query($conn, $consulta_text))
  {
  while ($obj=mysqli_fetch_object($consulta_text))
    {
      var_dump($retorno); //el objeto
      //printf("%s (%s)\n",$obj->Lastname,$obj->Age);
    }
  // Free result set
  mysqli_free_result($result);
}


//var_dump($consulta); //esta es la consulta.







mysqli_close($conn);
?>
