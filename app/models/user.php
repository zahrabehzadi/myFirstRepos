<?php

namespace app\models;
use PDO;

class user
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixer
     */
    function  __construct()
    {
        $this->myconnection=new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

    }


    /**
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function login($user, $pass)
    {


        $prepared =$this->myconnection->prepare("select * from user where username=? and password=?");
        $bind = array($user, $pass);
        $prepared->execute($bind);
        $result = $prepared->fetchAll();
        return $result;

    }






    /**
     * @param $user
     * @param $pass
     * @return mixed
     */


}



