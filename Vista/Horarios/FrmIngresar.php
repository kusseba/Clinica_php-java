<html>
    <head>

    </head>

    <body>
        <form action="preparar.php" method="POST">
            <label for="id">Identificar</label>
            <input type="number" readonly name="id" value="0">
            <br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descipcion" value="">
            <br>
            <label for="orden">Orden</label>
            <input type="number" name="orden" min="1" value="1">
            <br>
            <input type="submit" name="btn_nuevo" value="Guardar">
        </form>

        <input type="submit" name="btn_modificar" $value="cupedar">
        ID -> value="<?php echo $hora->getId(); ?>"
        Desc -> value="<?php echo $hora->getDescripcion(); ?>"
        Orden -> value="<?php echo $hora->getOrden(); ?>"
        
    </body>

</html>

<?php

require_once ".../.../Conexion/Conexion.php";
require_once ".../.../Modelo/Horario.php";
require_once ".../.../controlador/horarios.php";

if(isset($_GET["id"])){
    $ob = new Horarios();
    if($ob->abrirConexion()){
        $h = new Horario();
        $h->setId($_GET["id"]);
        $hora = $ob->obtener($h);
        $ob->cerrarConexion();
    } else {
        echo "ERROR";
    }
}


?>
