<?php

namespace app\controller;
use app\models as modell;

class access
{


    /**
     *
     */
    public function login(){
        $smarty ="";
        $error="";
        include (__DIR__ . '/../smartyheader.php');


        if(isset( $_POST['username'])&& isset($_POST['password'])){

            require_once (__DIR__.'/../models/user.php');
            $object=new modell\user();

           $result=$object->login( $_POST['username'],$_POST['password']);
           if($result){
                $error='logged';
           }
           else{
               $error='wrong pass';

           }

        }
        $smarty->assign("error", $error);
        $smarty->display('login.tpl');

    }


}

