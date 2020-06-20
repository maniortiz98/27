<?php

    class mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrvalue;
    
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        
        public function insert(string $query, array $arrvalue)
        {
            $this->strquery = $query;
            $this->arrvalue = $arrvalue;
           
            $insert = $this->conexion->prepare($this->strquery);
            $resinsert = $insert->execute($this->arrvalue);
            if($resinsert)
            {
                $lastinsert = $this->conexion->lastInsertId();
            }else{
                $lastinsert = 0;

            }
            return $lastinsert;
        }
        public function select(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function select_all(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }
        public function update(string $query, array $arrvalue)
        {
            $this->strquery = $query;
            $this->arrvalue = $arrvalue;
            $update = $this->conexion->prepare($this->strquery);
            $resexecute = $update->execute($this->arrvalue);
            return $resexecute;
        }
        public function delete(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $del = $result->execute();
            return $del;
        }


            
        

    }


?>