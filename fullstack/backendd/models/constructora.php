<?php


class constructora extends conectar
{


    public function get_constructora()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM constructora");
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }
    }

    public function get_constructora_id($id){
      
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT *FROM constructora WHERE id = ?");
            $stm -> bindValue(1,$id);
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }

    }


    public function insert_constructora($id,$nombre,$direccion ){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO constructora(id,nombre,direccion) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$direccion);
   
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}


class empleados extends conectar
{


    public function get_empleados()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM empleados");
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }
    }

    public function get_emplados_id($id){
      
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM empleados WHERE id = ?");
            $stm -> bindValue(1,$id);
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }

    }


    public function insert_empleados($id,$usuario,$password){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO empleados(id,usuario,password) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$usuario);
        $stm->bindValue(3,$password);
      
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}


/////////////////////////////////////////////////////////////////////


class cotizaciones extends conectar
{


    public function get_cotizaciones()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM cotizaciones");
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }
    }

    public function get_cotizaciones_id($id){
      
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM cotizaciones WHERE id = ?");
            $stm -> bindValue(1,$id);
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }

    }


        public function insert_cotizaciones($id,$id_contructora,$id_empleado,$fecha){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO cotizaciones(id,id_constructora,id_empleado, fecha) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$id_contructora);
        $stm->bindValue(3,$id_empleado);
        $stm->bindValue(3,$fecha);
      
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}


/////////////////////////////////////////////////////////////////////


class productos extends conectar
{


    public function get_productos()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM productos");
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }
    }

    public function get_productos_id($id){
      
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar -> prepare("SELECT * FROM productos WHERE id = ?");
            $stm -> bindValue(1,$id);
            $stm -> execute();
            return $stm -> fetchAll(PDO:: FETCH_ASSOC);
        } catch (Exception $th) {
            return $th -> getMessage();
        }

    }


    public function insert_productos($id,$nombre,$descripcion,$precio){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO productos(id,nombre,descripcion,precio) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$descripcion);
        $stm->bindValue(3,$precio);
      
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}


