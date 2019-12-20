<?php
/**
 * Created by PhpStorm.
 * User: zahra
 * Date: 12/20/2019
 * Time: 5:57 AM
 */

namespace con;
use PDO;

class connect
{
    public  static  function con(){
        try {

            $myconnection = new PDO("mysql:host=localhost;dbname=mvcproject", "root", "");
            return $myconnection;


        } catch (PDOException $e) {
//error text info
            echo $e . getMessage();
//error array
            print_r($e . errorInfo());
        }
    }


}