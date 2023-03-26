<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre de producto</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Opciones</th>
      </tr>
    </thead
    <tbody>
      <tr>
        <td>CERVEZA </td>
        <td>Cerveza POKER</td>
        <td>3500</td>
        <td>1</td>
        <td>
          <button type="button" class="btn btn-primary">AGREGAR</button>
          <button type="button" class="btn btn-danger">CANCELAR</button>
        </td>
      </tr>    
    </tbody>
  </table>

  <br></br>
  <center>        
    <a href="{{route ('Producto')}}"class="btn btn-primary">VOLVER</a> 
  </center>
</body>
</html>