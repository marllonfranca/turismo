<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Hotel</title>
<?php
include('caminhos.php');
include('conexao.php');
?>
</head>


<body>

<div class="container" align="center">
<form action="processos.php" method="post" >
<div class="form-group">
<label for="exampleInputEmail1">Hotel</label>
<input class="form-control" type="text" name="nome" placeholder="Nome do hotel" id = "none"/>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Estrelas</label>
<input class="form-control" type="number" name="estrelas" placeholder="Quantidade de estrelas" id="estrelas" />
</div>
<button type="submit" class="btn btn-default">CADASTRAR</button>
<input type="hidden" value="1" name="opc"/>
</form>
</div>

<br><br><br>
<div>
<table>
<tr>
<td>Hotel</td>
<td>Estrelas</td>
</tr>

<?

$rs = $conexao->prepare("SELECT idHotel, nome, estrelas FROM hoteis order by nome"); 

if($rs->execute()){ 
	if($rs->rowCount() > 0){
		while($row = $rs->fetch(PDO::FETCH_OBJ)){
		?>
		<tr>
		<td><?=$row->nome?></td>
		<td><?=$row->estrelas?></td>
		<td> <input type="button" value="ALTERAR" onClick="alterar();"></td>
		<td> <input type="button" value="EXCLUIR" onClick="delete('<?=$row->idHotel?>');"></td>
		</tr>
		<?
		}
	}
}
?>
</table>
</div>

</body>
</html>
