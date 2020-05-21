<!DOCTYPE html>
<html lang="es">
    <head>
        <title>2.Curso OOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="padding: 15px;">
    <h3>Curso PHP OOP: Clase 2</h3>
    <?php
        class Cliente{
            public $id_cliente;
            public $nombre;
            public $apellidos;
            public $email;
            public $telefono;

            function carga_usuarios($id_cliente){
                // Carga los datos de BD
                $this->id_cliente = $id_cliente;
                $this->nombre     = "Juan Carlos";
                $this->apellidos  = "Ruggiero";
                $this->email      = "ruggiero77@gmail.com";
                $this->telefono   = +5804122192202;
            }

            function compra($producto, $precio){
                // lo guardo en la BD
                echo "El usuario {$this->nombre} {$this->apellidos} ha comprado el producto llamado <strong>{$producto}</strong> por un precio de {$precio}€."."\n";
                // echo "<br>";
            }


            function devolucion($id_compra){
                // se conecta a la BD
                echo "Se ha devuelto el dinero de la compra {$id_compra}€ al usuario <strong>{$this->nombre} {$this->apellidos}</strong>";
            }
        };

        $usuario=new CLiente;

        $usuario->carga_usuarios(13);

        $usuario->compra("perrito",10);
        echo "<br>";
        $usuario->devolucion(345)

        // echo $usuario->nombre;
        // var_dump($usuario);
        
        
        ?>
    </body>
</html>