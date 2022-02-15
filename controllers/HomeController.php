<?php 
require_once 'models/Usuario.php';

class HomeController{
    public function index(){
        $user = new Usuario();
        $users = $user->getAll();
        // var_dump($users);
        while($user = $users->fetch_object()){
            echo $user->name;
        }
    }



}
?>