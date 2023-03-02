<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Empresa en CodeIgniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    
    <!--<form id="empresa" name="empresa" method="post" action="<?php echo base_url(); ?>index.php/empresa/guardar">
        Nombre <input name="nombre" type="text"/><br/>
        Tipo de producto <input name="tipo_producto" type="text"/><br/>
        Codigo del producto <input name="codigo_producto" type="text"/><br/>
        <input type="submit" value="guardar"/>

    </form>-->

    <div class="container">
  <h2><?php echo $titulo; ?></h2>
  <form id="empresa" name="empresa" method="post" action="<?php echo base_url(); ?>index.php/empresa/guardar">
    <div class="form-group">
      <label for="text">Codigo:</label>
      <input type="text" class="form-control" placeholder="Agrega un codigo al producto" name="code">
    </div>
    <div class="form-group">
      <label for="text">Descripcion del producto:</label>
      <input type="text" class="form-control" placeholder="Agrega una descripcion al producto" name="description">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Seccion:</label>
        <select name="section">
            <option value="1">Componentes</option>
          </select>
      </div>
      <br>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Marca:</label>
        <select name="brand">
            <option value="5">BLACKPCS</option>
          </select>
      </div>
      <br>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Linea:</label>
        <select name="line">
            <option value="20">USB</option>
          </select>
      </div>
      <br>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Serie:</label>
        <select name="serie">
            <option value="5">16GB</option>
          </select>
      </div>
      <br>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Status:</label>
        <select name="status">
            <option value="1">Normal</option>
          </select>
      </div>
      <br>
      <div class="form-group">
      <label for="text">Existencias</label>
      <input type="text" class="form-control" placeholder="Agrega las existencias del producto" name="stock">
    </div>
    <div class="form-group">
      <label for="text">Precio:</label>
      <input type="text" class="form-control" placeholder="Agrega precio al producto" name="price">
    </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Moneda:</label>
        <select name="currency">
            <option value="1">USA</option>
            <option value="2">MXN</option>
          </select>
      </div>
      <br>
    <!--<div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>-->
    <button type="submit" class="btn btn-default">Guardar</button>
  </form>
</div>
</body>
</html>
