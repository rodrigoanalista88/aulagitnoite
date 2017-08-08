<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <h3 class="page-header">Projeto da aula de GIT</h3>
                <a href="index.html">Voltar</a>
                <table class="table table-hover">
                    <?php
    $con = mysqli_connect("localhost","root","","git2");           
            
    $sql = "select * from funcionario";

    $result = mysqli_query($con, $sql);

    while($row = mysql_fetch_array($result)) {
        echo "<tr><td>" .$row['nome'] . "</td>";
        echo "<td>" $row['email'] . "</td></tr>";
    }

    mysqli_close($con);
?>
                </table>
            </div>
        </div>

    </div>
</body>
</html>