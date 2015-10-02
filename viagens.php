<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Viagens</title>
<?php
include('caminhos.php');
include('conexao.php');
?>
</head>

<body>


<div class="container" align="center">
<form method="post" action="processos.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Descrição</label>
   <input class="form-control" type="text" name="descricao" placeholder="Descrição viagem"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Inicio</label>
    <input class="form-control" type="date" name="dt_inicio" placeholder="Data inicio" />
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fim</label>
	
    <input class="form-control" type="date" name="dt_fim" placeholder="Data érmino" />
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
	
    <input class="form-control" type="number" name="preco" placeholder="Preço"  />
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Hotel</label>
<select name="hotel" class="form-control">
<option>SELECIONE</option>
</select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cidade</label>
<select name="cidade" class="form-control">
<option>SELECIONE</option>
</select>
</div>

<button type="submit" class="btn btn-default">CADASTRAR</button>
<input type="hidden" value="3" name="opc"/>
</form>
</div>




<br><br><br>
<div>
<table>
<tr>
<td>Descricao</td>
<td>dt_inicio</td>
<td>dt_fim</td>
<td>preco</td>
<td>hotel</td>
<td>cidade</td>

</tr>

<?

$rs = $conexao->prepare("SELECT idViagens ,  descricao ,  dt_inicio ,  dt_fim ,  preco ,  hotel ,  cidade  FROM  viagens order by descricao"); 

if($rs->execute()){ 
	if($rs->rowCount() > 0){
		while($row = $rs->fetch(PDO::FETCH_OBJ)){
		?>
		<tr>
		<td><?=$row->descricao?></td>
      <td><?=$row->dt_inicio?></td>
      <td><?=$row->dt_fim?></td>
      <td><?=$row->preco?></td>
      <td><?=$row->hotel?></td>
      <td><?=$row->cidade?></td>
      
		<td> <input type="button" value="ALTERAR" onClick="alterar();"></td>
		<td> <input type="button" value="EXCLUIR" onClick="delete('<?=$row->idViagens?>');"></td>
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
