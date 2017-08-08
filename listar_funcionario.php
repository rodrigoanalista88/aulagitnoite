<?php
	$con = mysqli_connect("localhost","root","","git2");           
            
	$sql = "select * from funcionario";

	$result = mysqli_query($con, $sql);

	while($row = mysql_fetch_array($result)) {
		echo $row['nome'] . "<br>";
		echo $row['email'] . "<br>";
	}

	mysqli_close($con);
?>