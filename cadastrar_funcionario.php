<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$con = mysqli_connect("localhost","root","coti","git2");           
            
	$sql = "insert into funcionario values(null,'".$nome."','".$email."')";

	if(mysqli_query($con, $sql)) {
		echo "Gravado com sucesso!";
	} else {
		echo "Erro ao gravar!";
	}

	mysqli_close($con);
?>