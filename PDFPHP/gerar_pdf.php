<?php

require_once('tcpdf/tcpdf.php');

$host = 'localhost';
$usuario = 'root';
$password = '';
$database = 'Trabalho Web';

$mysqli = new mysqli($host, $usuario, $password, $database);

if($mysqli->connect_error) {
    echo "Erro na conexão com banco de dados" .$mysqli->connect_error;
}

// Consulta SQL para obter os dados
$sql = "SELECT * FROM form3";
$resultado = $mysqli->query($sql);

// Criar o objeto PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
$pdf->SetCreator('Trabalho Web');
$pdf->SetAuthor('Trabalho Web');
$pdf->SetTitle('Relatório em PDF');
$pdf->SetAutoPageBreak(true, 10);

// Adicionar página
$pdf->AddPage();

// Configurações da tabela
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetFillColor(180, 180, 180);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(0, 0, 0);

// Cabeçalho da tabela
$pdf->Cell(30, 10, 'ID', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Nome', 1, 0, 'C', 1);
$pdf->Cell(30, 10, 'Curso', 1, 1, 'C', 1);

// Preencher a tabela com os dados
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['nome'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['curso'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['curso'], 1, 1, 'C');
}

$pdf->Output('relatorio.pdf', 'D');

?>