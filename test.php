<?php
	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "trabalho web";

	$connection = mysqli_connect($servidor, $username, $password, $database);
/* 	if (!$connection) {
		echo "Não conectado ";	
	}

		// Query SQL para atualizar os campos vazios como NULL
		$result = mysqli_query($connection, $sql);
		$sql = "UPDATE form3 SET alergiasInpN = NULL WHERE alergiasInpN = ''";
		
// Verificação de erros na consulta 0
if (!$result) {
    echo 'Erro na consulta: ' . mysqli_error($connection);
    exit;
}

$sql1 = "UPDATE form3 SET restAlInpN = NULL WHERE restAlInpN = ''";
$result1 = mysqli_query($connection, $sql1);

// Verificação de erros na consulta 1

if (!$result1) {
    echo 'Erro na consulta: ' . mysqli_error($connection);
    exit;
}

// Verificação de erros na consulta 2

$sql2 = "UPDATE form3 SET tratamentoMInN = NULL WHERE tratamentoMInN = ''";
$result2 = mysqli_query($connection, $sql2);

if (!$result2) {
    echo 'Erro na consulta: ' . mysqli_error($connection);
    exit;
}

// Verificação de erros na consulta 3

$sql3 = "UPDATE form3 SET medicacaoInpN = NULL WHERE medicacaoInpN = ''";
$result3 = mysqli_query($connection, $sql3);

if (!$result3) {
    echo 'Erro na consulta: ' . mysqli_error($connection);
    exit;
}

// Verificação de erros na consulta 4

$sql4 = "UPDATE form3 SET informacaoInpN = NULL WHERE informacaoInpN = ''";
$result4 = mysqli_query($connection, $sql4);

if (!$result4) {
    echo 'Erro na consulta: ' . mysqli_error($connection);
    exit;
}

?>
 */