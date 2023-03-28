<!DOCTYPE html>
<html>
<head>
  <title>Leer archivo Excel y guardar en base de datos</title>
</head>
<body>
  <?php echo form_open_multipart(base_url('excelcontroller/Save')); ?>
    <input type="file" name="archivo" required>
    <input type="submit" value="Guardar">
  <?php echo form_close(); ?>
</body>
</html>