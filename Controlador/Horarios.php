<?php

    class Horarios Extends Conexion {
        public function listar(string $req) {
            $retorno = [];
            $datos = $this->query($req);
            foreach($datos as $key=>$value){
                $hora = new Horario();
                $hora->setId($value["id"]);
                $hora->setDescripcion($value["descripcion"]);
                $hora->setOrden($value["orden"]);
                $retorno[] = $hora;
            }
            return $retorno;
        }

        public function ingresar(Horario $par) {
            $ok = False;
            try {
                $sql = $this -> prepare("insert into Horarios(descripcion, orden) values(:descripcion, :orden)");
                $ord-> $par->yetOrden();
                $sql->bindParam(":descripcion", $desc, PDO::PARAM_STR);
                $sql->bindParam(":orden", $ord, PDO::PARAM_INT);
                $sql->execute();
                $ok = True;
            } catch(PDOException $pdoex) {
                echo"ERROR".$pdoex->getMessage();
            } finally {
                return $ok;
            }
        }

        public function obtener(Horario $par){
            $horarios = $this->listar("select * from horarios where id =".$par.getId());
            if(sizeof($horarios)>0){
                $horarios = $horarios[0];
            } else {
                $horarios = new Horario();
            }
            return $horarios;
            
        }

        
    }

    


?>