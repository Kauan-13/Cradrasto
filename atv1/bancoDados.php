<link rel="stylesheet" href="style.css">
<?php
echo "<center><h1> Banco de Dados </h1></center>";
$file = scandir("Dados");

	for($i = 0; $i < count($file); $i++){
		if($file[$i] == "." || $file[$i] == ".."){
			echo "";
		}else{
			$di = trim($file[$i]);
			echo "<li> <a class='lk' href='readInfo.php?id=$di'> $file[$i] </a></li>";
		}
	}

	echo "<br> <a class='lk' href='index.php'><button> Cadastrar </button></a>";
?>