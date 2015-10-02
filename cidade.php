<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cidades</title>
<?php
include('caminhos.php');
include('conexao.php');
?>
</head>

<body>

<div class="container" align="center">
<form method="post" action="processos.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Cidade</label>
   <input class="form-control" type="text" name="nome" placeholder="Nome da cidade"/>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Estado</label>
<select name="estado">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
</div>
<button type="submit" class="btn btn-default">CADASTRAR</button>
<input type="hidden" value="2" name="opc"/>
</form>
</div>


<br><br><br>
<div>
<table>
<tr>
<td>Cidade</td>
<td>Estado</td>
</tr>

<?

$rs = $conexao->prepare("SELECT idCidades, nome, estado FROM cidades order by nome"); 

if($rs->execute()){ 
	if($rs->rowCount() > 0){
		while($row = $rs->fetch(PDO::FETCH_OBJ)){
		?>
		<tr>
		<td><?=$row->nome?></td>
		<td><?=$row->estado?></td>
		<td> <input type="button" value="ALTERAR" onClick="alterar();"></td>
		<td> <input type="button" value="EXCLUIR" onClick="delete('<?=$row->idCidades?>');"></td>
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
