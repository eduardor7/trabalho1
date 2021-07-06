connect.php 

<?php
 $connectdb = new mysqli('localhost', 'root','',  'carro');
 
if (!$connectdb) 
{ die("Não contectado" . mysqli_error(). "<br>");
   
} 

?>