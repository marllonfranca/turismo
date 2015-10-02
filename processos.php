<?
include('conexao.php');

$opc = $_POST['opc'];



if($opc == 1){
	
$nome 		= $_POST['nome'];
$estrelas 	= $_POST['estrelas'];


$stmt = $conexao->prepare("INSERT INTO hoteis (idHotel, nome, estrelas) VALUES(null, ?, ?)"); 
$stmt->bindParam(1, $nome); 
$stmt->bindParam(2, $estrelas); 
$stmt->execute();



}else if($opc == 2){

$nome 		= $_POST['nome'];
$estado 	= $_POST['estado'];


$stmt = $conexao->prepare("INSERT INTO cidades (idCidades, nome, estado) VALUES(null, ?, ?)"); 
$stmt->bindParam(1, $nome); 
$stmt->bindParam(2, $estado); 
$stmt->execute();


}else if($opc == 3){


$descricao 		= $_POST['descricao'];
$dt_inicio 			= $_POST['dt_inicio'];
$dt_fim 				= $_POST['dt_fim'];
$preco 				= $_POST['preco'];
$hotel 			= $_POST['hotel'];
$cidade 			= $_POST['cidade'];



$stmt = $conexao->prepare("INSERT INTO viagens (idViagens, descricao, dt_inicio, dt_fim, preco, hotel, cidade) VALUES (null, ?,?,?,?,?,?)"); 
$stmt->bindParam(1, $descricao); 
$stmt->bindParam(2, $dt_inicio); 
$stmt->bindParam(3, $dt_fim); 
$stmt->bindParam(4, $preco); 
$stmt->bindParam(5, $hotel); 
$stmt->bindParam(6, $cidade); 
$stmt->execute();


}

print_r($_POST);
die();


?>