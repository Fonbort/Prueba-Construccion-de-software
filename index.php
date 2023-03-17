<!DOCTYPE html>
<?php
if ((isset($_POST['id'])) && ($_POST['id'] != '') && (isset($_POST['marca'])) && ($_POST['marca'] != '')) {

    include "models/bicicletas_model.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['tipo'] );
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba parcial construccion de software</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Bicicletas</h1>
                <hr/>
            
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nueva Bicicleta</h3>    
                                   
                        id: <input type="text" name="id" class="form-control"/>    
                        marca: <input type="text" name="marca" class="form-control"/>  
                        modelo: <input type="text" name="modelo" class="form-control"/>
                        precio: <input type="text" name="precio" class="form-control"/>
                        tipo: <input type="text" name="tipo" class="form-control"/>  
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                        <input type="submit"  Where= "Eliminar" class="btn btn-danger"/>
                        <input type="submit"  Here="Actualizar" class="btn btn-primary"/>
                        
                        
                       


                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de bicicletas</h3>
                    <a href="controllers/bicicletas_controller.php"><i class="fa fa-align-justify"></i> Haga clic para ingresar a la tabla de bicicletas</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
            </footer>
        </div>
    </body>
</html>