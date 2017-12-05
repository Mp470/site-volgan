<?php
	$valor= $_GET["value"];

	
		$strcon = mysqli_connect("localhost","id3879220_nuada","nuada50461","id3879220_email");
		$sql = "INSERT INTO mails VALUES ";
		$sql .= "('$valor')"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
		mysqli_close($strcon);
		echo "Cadastrado com sucesso!";

	
?>
