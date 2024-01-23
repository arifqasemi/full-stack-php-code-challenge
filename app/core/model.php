<?php
namespace App\Core;

use App\Core\Database;

class Model extends Database{



    public function insert($data){
        
       try{ 
        $keys = array_keys($data);
        $query ="INSERT INTO users"."(".implode(',',$keys).")"."values(:".implode(',:',$keys).")";
        $this->query($query,$data);
        return true;

       }catch(Excepiton $e){
        return false;

       }
       
        

    }



    public function update($id,$data){


      

          $query = "update users set ";
        foreach($data as $key =>$value){
            $query .=$key ."=:".$key.",";

        }

        $query = trim($query,',');
        $query .=" where id =:id";
        $data['id'] = $id;
        $this->query($query,$data);
        print_r($query);
        print_r($data);

}


     public function findAll(){

        $query ="select * from users";
        $result = $this->query($query);
        return $result;

     }



     public function findFirst($data){

        $query ="select * from users where ";
        foreach($data as $key =>$value){
            $query .=$key ."=:" .$key." && ";
        }

        $query = trim($query,"&& ");
        // print_r($query);
        // return;
        $query .=" order by id limit 1";
        $result = $this->query($query,$data);
        if($result){
            return $result;
        }

     }

   

}