<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicando</title>
</head>
<body>
    <center><h1>Practicando conexion</h1>
    <form action="index.php" method="post">
    <label for="Id">Documento:</label>
    <input type="text" name="id" id="Id"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="Nombre" id="nombre"><br><br>
    <label for="apellido">Apelido:</label>
    <input type="text" name="Apellido" id="apellido"><br><br>
    <label for="telefono">Telefono:</label>
    <input type="text" name="Telefono" id="telefono"><br><br>
    <input type="submit" value="Registrar" name="btnregistrar">
    </form>
    <?php
    if (isset($_POST['btnregistrar'])) {
        include("./clases/conexion.php");

        $_id = $_POST['id'];
        $_nombre = $_POST['Nombre'];
        $_apellido = $_POST['Apellido'];
        $_telefono = $_POST['Telefono'];
        $conexion->query("INSERT INTO $tabla(ID, Nombre, Apellido, Telefono) VALUES('$_id','$_nombre','$_apellido','$_telefono')");
        include("./clases/cerrar.php");
    }
    ?>
    </center>

</body>
</html>