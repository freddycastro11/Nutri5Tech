<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Recetas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
			<div class="row">
				<div class="col-md-12">		
				<div class="alert alert-info" style="font-size: 20px;text-align: center;" role="alert">
                 Agregar Receta!!!
               </div>
    <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 20px;">Titulo De La Receta</label>
    <textarea type="text"  name="nombre" required class="form-control" style="width: 900px; height: 80px;font-size: 20px;"  placeholder="Texto a mostrar"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 20px;">Proceso</label>
    <textarea type="text" style="width: 900px; height: 200px; font-size: 12px;" required name="informacion" class="form-control"  placeholder="Tema"></textarea>
  </div>
  <label for="basic-url" style="font-size: 20px;">Url del video de la Receta</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-size: 15px;" id="basic-addon3">https://example.com/users/</span>
  </div>
  <input type="text" class="form-control" name="link" required style="width: 100px;font-size: 12px; height: 40px;" aria-describedby="basic-addon3">
</div>
<div class="form-group">
    <label for="exampleInputFile" style="font-size: 20px;">Imagen</label>
    <input type="file" name="Imagen" required>
  </div>.

  <input type="submit" value="Agregar Receta" style="width: 100px;font-size: 12px; height: 40px;" class="btn btn-primary">
  

    </form>
   
</body>
</html>