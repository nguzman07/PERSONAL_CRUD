<?php
    class Producto extends Conectar {
        public function get_producto() {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_producto_x_id($Id_Producto) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE Id_Producto = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$Id_Producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>