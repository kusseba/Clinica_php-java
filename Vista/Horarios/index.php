            <html>
                <head>

                </head>
                 <body>
                <h1>Horarios</h1>
                <a href="">Ingresar.php</a>
                <hr>
                    <table>
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>ID</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <t/body>
                <?php
                    require_once "../../conexion/conexion.php";
                    require_once "../../Horarios.php";
                    require_once "../../Horario.php";
                    
                    $ob_horario=new Horarios();
                    if($ob_horario->abrirConexion()) {
                        $rs=$ob_horario->listar(
                            "select * from Horarios order by order asc"
                        );

                        foreach($rs as $key=>$v) {
                            echo "<tr>";
                            echo "<td><a href='FrmEditar.php?id".$v->getId()."'>Editar</a></td>";
                            echo "<td>".$v->getId()."</td>";
                            echo "<td>".$v->getDescripcion()."</td>";
                            echo "<tr>";
                        };
                    }

                
                ?>
                </body>
            </html>


