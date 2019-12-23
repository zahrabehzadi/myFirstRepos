<?php
/**
 * Created by PhpStorm.
 * User: zahra
 * Date: 12/22/2019
 * Time: 1:18 AM
 */
namespace app\models;
use PDO;
class contactlist
{

    function  __construct()
    {
        $this->myconnection=new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");

    }


    public function show()
    {

        $prepared =$this->myconnection->prepare('select * from contactlist where userid= ' . $_SESSION["id1"]);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }

    public function add($name, $mobile)
    {

        $prepared =$this->myconnection->prepare("insert into contactlist (name,phonenumber,userid) values
                                                     ('$name','$mobile','" . $_SESSION["id1"] . "') ");
        $result = $prepared->execute();
        return $result;

    }



    /**
     * in commenta ta hade emkan bezar
     * @param $user
     * @param $pass
     * @return mixed
     */
    public function edit($name, $mobile)
    {


        $prepared =$this->myconnection->prepare('UPDATE contactlist SET name=?,phonenumber=? WHERE contactid=' . $_SESSION['id2']);
        $bind = array($name, $mobile);
        $result = $prepared->execute($bind);
        return $result;

    }

    public function ushow($id)
    {

        $prepared = $this->myconnection->prepare('select * from contactlist where contactid=' . $id);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }


    public function delete($id3)
    {

        $prepared = $this->myconnection->prepare('DELETE FROM contactlist WHERE contactid=' . $id3);
        $prepared->execute();
        $result = $prepared->fetchAll();
        return $result;

    }


    /**
     * @return array
     */
    public function search1($search)
    {



        $keyword = $search;
        $sql = "SELECT * FROM `contactlist` WHERE `name` LIKE ? and  userid=" . $_SESSION['id1'];
        $q = $this->myconnection->prepare($sql);
        $q->execute(array("%$keyword%"));
        $result = $q->fetchAll();
        return $result;
    }


}