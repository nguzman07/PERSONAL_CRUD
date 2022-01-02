<?php
    class Producto extends Conectar {
        public function insert_producto($Nombre_Producto) {                      //CREATE
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_producto(Id_Producto, Nombre_Producto, Fecha_Creacion, Fecha_Modificacion, Fecha_Eliminacion, Estado) VALUES (NULL, ?, now(), NULL, NULL, 1);";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$Nombre_Producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        
        public function get_producto() {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE Estado=1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
                                                                                   //READ
        public function get_producto_x_id($Id_Producto) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE Id_Producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$Id_Producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function update_producto($Id_Producto, $Nombre_Producto) {               //UPDATE
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto SET Nombre_Producto=?, Fecha_Modificacion=now() WHERE Id_Producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$Id_Producto);
            $sql->bindValue(2,$Nombre_Producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function delete_producto($Id_Producto) {                          //DELETE
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto SET Estado=0, Fecha_Eliminacion=now() WHERE Id_Producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$Id_Producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>