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
       <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('create') }}"> Nuevo Producto
                    <a href="" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                    </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                    <a class="d-lg-none" href="{{ route('create') }}">Nuevo Producto</a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Tabla de productos</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Imagen</th>
                                            <th>Acciones</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $test -> id }}</td>
                                                <td>{{ $test -> producto }}</td>
                                                <td>{{ $test -> cantidad }}</td>
                                                <td><img src="{{ $test->imagen }}" class='imagen-producto'></td>
                                                <td>
                                                          <form action="{{ route('test.delete', $test->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                    </button>
                                                    <a href="{{ route('show',$test->id)}}" type="button" rel="tooltip" title="Mostrar" class=".glyphicon .glyphicon-user">
                                                            <i class="fa fa-eye"></i>
                                                    </button>
                                                    </button>
                                                    <a>
</a>
<a>
</a>
                                                    <a href="" type="button" rel="tooltip" title="Editar" class=".glyphicon .glyphicon-user">
                                                            <i class="fa fa-edit"></i>
                                                    </button>
                                                          </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>