<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Hotel</title>
<?php
include('caminhos.php')
?>
</head>


<body>

<div class="container" align="center">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Hotel</label>
   <input class="form-control" type="text" name="nome" placeholder="Nome do hotel"/>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Estrelas</label>
	
    <input class="form-control" type="number" name="estrelas" placeholder="Quantidade de estrelas" />
</div>


<button type="submit" class="btn btn-default">CADASTRAR</button>
</form>
</div>



</body>
</html>
