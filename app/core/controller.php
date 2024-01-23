<?php

namespace App\Core;

class Controller{
    public function view($view,$data=[]){
        extract($data);

        if('../app/views/'.$view.".php"){
            require_once('../app/views/'.$view.".php");
        }else{
            echo "page not found";
        }

    }
}