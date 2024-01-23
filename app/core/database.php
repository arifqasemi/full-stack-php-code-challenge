<?php

namespace App\Core;
use PDO;
class Database{






    public function connect(){
        $sql = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
         return new PDO($sql,'root','');
    }

    public function query($query,$data = [],$type='object'){
        $con = $this->connect();
        $stm = $con->prepare($query);
        if($stm){
            $excute = $stm->execute($data);
            if($type == 'object'){
                $type = PDO::FETCH_OBJ;
            }else{
                $type = PDO::FETCH_ASSOC;
            }

            $result =$stm->fetchAll($type);

            if(is_array($result) && count($result) > 0){
                return $result;
            }
        }
   return false;


    }



}