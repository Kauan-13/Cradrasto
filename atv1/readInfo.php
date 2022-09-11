<link rel="stylesheet" href="style.css">
<?php

$dire = $_GET['id'];

$data = file("Dados\ $dire");

$title = trim($dire, ".txt");

echo "<center><h1> Funcionário $title </h1></center>";

$dado = "";

for ($i = 0; $i < count($data); $i++) {
    $dado .= "$data[$i] <br>";
}
echo "<section><form id='box'> $dado <br> 
<a class='lk' href='index.php'><button type='button'> Cadastrar Novamente </button></a> </form></section>";

?>	
