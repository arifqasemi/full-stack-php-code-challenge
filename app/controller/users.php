<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\Model;
use App\Models\User;

class Users extends Controller{




    public function index($id){
      $data = [];
       $user = new User();
       $users = $user->findAll();
       $data['users'] = $users;    
      $this->view('users',$data);
    }




}