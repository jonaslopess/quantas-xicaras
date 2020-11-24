<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php

$hostname = "localhost";
$username = "jonas";
$password = "#Faex100193!";
$db = "sistema_receita";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center">
<tr>
  <td>Código</td>
  <td>Nome</td>
  <td>Quantidade</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM ingrediente")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['codigo']}</td>
    <td>{$row['nome']}</td>
    <td>{$row['quantidade_disponivel']}</td>
   </tr>\n";

}

?>
</table>
</body>
</html>