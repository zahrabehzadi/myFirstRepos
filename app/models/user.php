<?php

namespace app\models;
use PDO;

class user
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function login($user, $pass)
    {
        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }

        $prepared = $myconnection->prepare('select * from user where username=? and password=?');
        $bind = array($user, $pass);
        $prepared->execute($bind);
        $result = $prepared->fetchAll();
        return $result;

    }


}

class contactlist
{
    public function show(){

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
        $prepared = $myconnection->prepare('select * from contactlist where userid= '.$_SESSION["id1"]);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }

}
class addcontact
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function add($name, $mobile)
    {
        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }$prepared = $myconnection->prepare("insert into contactlist (name,phonenumber,userid) values
                                                     ('$name','$mobile','".$_SESSION["id1"]."') ");
        $result=$prepared->execute();
        return $result;

    }


}