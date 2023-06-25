<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LUKAS LLARBI</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>
<table class="table caption-top">
  <caption>QUE ESTAS ORDENANDO MI REY</caption>
  <thead>
    <tr>
      <th scope="col"> Usuarios</th>
      <th scope="col">Producto</th>
      <th scope="col">Detalles</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Duban Ferney</th>
      <td>Poker</td>
      <td>3500</td>
      <td>
      <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <a href="{{route ('Editar')}}"class="btn btn-danger">Editar</a>
            </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <a href="{{route ('inicio')}}"class="btn btn-warning btn-block">Borrar</a>
              </div>
              <div>
          </div>
</td>   
    </tr>
    <tr>
      <th scope="row">Karen Calderon</th>
      <td>Paquete de papas</td>
      <td>2500</td>
      <td>
      <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <a href="{{route ('Editar')}}"class="btn btn-danger">Editar</a>
            </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <a href="{{route ('inicio')}}"class="btn btn-warning btn-block">Borrar</a>
              </div>
              <div>
          </div>
</td>
</tr>
    <tr>
      <th scope="row">James Perdomo</th>
      <td>Andina</td>
      <td>4500</td>
      <td>
      <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <a href="{{route ('Editar')}}"class="btn btn-danger">Editar</a>
            </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <a href="{{route ('inicio')}}"class="btn btn-warning btn-block">Borrar</a>
              </div>
              <div>
          </div>
    </tr>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/llll.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </tbody>
</table>
<center>
    <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <a href="{{route ('Producto')}}"class="btn btn-danger">CANCELAR</a>
            </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <a href="{{route ('DETALLES')}}"class="btn btn-warning btn-block">FACTURA</a>
              </div>
              <div>
          </div>
    </center>
</body>
</html>
