<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Viagens</title>
<?php
include('caminhos.php')
?>
</head>

<body>


<div class="container" align="center">
<form>
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
</form>
</div>

</body>
</html>
