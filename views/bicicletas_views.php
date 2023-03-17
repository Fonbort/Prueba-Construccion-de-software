<!DOCTYPE html>
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
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de bicicletas</h3>
                <table class="table">
                    <tr>
                        <td><strong>id</strong></td>
                        <td><strong>marca</strong></td>
                        <td><strong>modelo</strong></td>
                        <td><strong>precio</strong></td>
                        <td><strong>tipo</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["id"]; ?></td>
                            <td><?php echo $datos[$i]["marca"]; ?></td>
                            <td><?php echo $datos[$i]["modelo"]; ?></td>
                            <td><?php echo $datos[$i]["precio"]; ?>$</td>
                            <td><?php echo $datos[$i]["tipo"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                
            </footer>
        </div>
    </body>
</html>