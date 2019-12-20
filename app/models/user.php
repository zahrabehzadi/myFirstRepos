<?php

namespace app\models;

use con\connect;
use PDO;
require 'connect.php';
use con\connect as modelll;

class user extends  modelll
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function login($user, $pass)
    {
        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare('select * from user where username=? and password=?');
        $bind = array($user, $pass);
        $prepared->execute($bind);
        $result = $prepared->fetchAll();
        return $result;

    }


}

class contactlist extends  modelll
{
    public function show()
    {
        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare('select * from contactlist where userid= ' . $_SESSION["id1"]);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }

}

class addcontact extends  modelll
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function add($name, $mobile)
    {
        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare("insert into contactlist (name,phonenumber,userid) values
                                                     ('$name','$mobile','" . $_SESSION["id1"] . "') ");
        $result = $prepared->execute();
        return $result;

    }


}

class editcontact extends modelll
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function edit($name, $mobile)
    {

        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare('UPDATE contactlist SET name=?,phonenumber=? WHERE contactid=' . $_SESSION['id2']);
        $bind = array($name, $mobile);
        $result = $prepared->execute($bind);
        return $result;

    }
}

class uniqshow extends modelll
{
    public function ushow($id)
    {
        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare('select * from contactlist where contactid=' . $id);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }


}

class delete extends modelll
{
    public function delete($id3)
    {

        $connection= new connect();
        $myconnection=$connection->con();

        $prepared = $myconnection->prepare('DELETE FROM contactlist WHERE contactid=' . $id3);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }

}

class search extends modelll
{
    /**
     * @return array
     */
    public function search1()
    {



        $connection= new connect();
        $myconnection=$connection->con();

        $keyword = $_SESSION['s'];
        $sql = "SELECT * FROM `contactlist` WHERE `name` LIKE ? and  userid=" . $_SESSION['id1'];
        $q = $myconnection->prepare($sql);
        $q->execute(array("%$keyword%"));
        $result = $q->fetchAll();
        return $result;
    }

}



