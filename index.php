<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron" id="heroe_jumbotron">
                    <h1 class="display-3">Super Heroes</h1>
                    <p class="lead">Heroes de un JSON a SQL</p>
                    <div class="mt-5" id="tabla_heroes">
                        <table class="table table-sm table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <td>Imagen</td>
                                    <td>Nombre</td>
                                    <td>Aperiencia</td>
                                    <td>Biografía</td>
                                    <td>Trabajo</td>
                                    <td>Conexiones</td>
                                </tr>
                            </thead>
                            <tbody id="datos_heroes"></tbody>
                        </table>
                    </div>
                    <div class="mt-5 w-100 text-center">
                       <div class="btn-group">
                            <span class="btn btn-dark btn-sm" id="btn_obtener_heroes">Generar heroes</span>
                            <span class="btn btn-danger btn-sm" id="btn_borrar_heroes">Borrar heroes</span>
                            <span class="btn btn-dark btn-sm" id="btn_mostrar_heroes">Mostrar heroes</span>
                        </div> 
                    </div>
                </div>            
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/optener_json.js"></script>
</body>
</html>