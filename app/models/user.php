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
    public function show()
    {

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
        $prepared = $myconnection->prepare('select * from contactlist where userid= ' . $_SESSION["id1"]);
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
        }
        $prepared = $myconnection->prepare("insert into contactlist (name,phonenumber,userid) values
                                                     ('$name','$mobile','" . $_SESSION["id1"] . "') ");
        $result = $prepared->execute();
        return $result;

    }


}

class editcontact
{

    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function edit($name, $mobile)
    {

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
        $prepared = $myconnection->prepare('UPDATE contactlist SET name=?,phonenumber=? WHERE contactid=' . $_SESSION['id2']);
        $bind = array($name, $mobile);
        $result = $prepared->execute($bind);
        return $result;

    }
}

class uniqshow
{
    public function ushow($id)
    {

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
        $prepared = $myconnection->prepare('select * from contactlist where contactid=' . $id);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }


}

class delete
{
    public function delete($id3)
    {

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
        $prepared = $myconnection->prepare('DELETE FROM contactlist WHERE contactid=' . $id3);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }

}

class search
{
    /**
     * @return array
     */
    public function search1()
    {

        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }


        $keyword = $_SESSION['s'];
        $sql = "SELECT * FROM `contactlist` WHERE `name` LIKE ? and  userid=" . $_SESSION['id1'];
        $q = $myconnection->prepare($sql);
        $q->execute(array("%$keyword%"));
        $result = $q->fetchAll();
        return $result;
    }

}



