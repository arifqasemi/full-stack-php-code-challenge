<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Models\User;
class Inputform extends Controller{




    public function index(){

        $user = new User();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             

            $data = [];
            $countryCode = $_POST['countryCode'];
            $phoneNumber = $_POST['contact'];
           $data['first_name'] = $_POST['first_name'];
            $data['Last_Name'] = $_POST['last_name'];
            $data['email'] =$_POST['email'];
            $data['website'] =$_POST['website'];

            $combinedNumber = $countryCode . $phoneNumber;


            $data['contact_number'] =$combinedNumber;

          $result = $user->insert($data);

          if($result){
            redirect('users');

          }else{
            echo "invalid";
          }

            
        };


        $this->view('inputform');
    }
}