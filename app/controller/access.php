<?php

namespace app\controller;
use app\models\user;
use app\models\contactlist;
require 'autoload.php';
require_once(__DIR__ . '/../models/user.php');
require_once(__DIR__ . '/../models/contactlist.php');

SESSION_START();

/**
 */
class access
{
    /*user login to contact list*/
    /**
     *
     */
   /* public function __construct()
    {

        include __DIR__.'/smartyheader.php';

    }*/

    public function login()
    {
        $smarty = "";
        $error = "";


         include __DIR__.'/smartyheader.php';

        if (isset($_POST['username']) && isset($_POST['password'])) {

            $object = new user();

            $result = $object->login($_POST['username'], $_POST['password']);

            foreach ($result as $data) {
                $value = $data['userid'];
                $_SESSION["id1"] = $value;
            }

            if ($result) {

                header("location:http://mvcproject.test/public/access/contactlist");
            } else {
                $error = 'wrong name or pass!!!!';

            }

        }
       $smarty->assign("error", $error);
        $smarty->display('login.tpl');


    }

    /**
     *
     */
    /*show contact list*/

    public function contactlist()
    {

        $smarty = "";
        include(__DIR__ . '/smartyheader.php');

        $object = new contactlist();
        $result = $object->show();


        $smarty->assign("data", $result);

        $smarty->display('contactlist.tpl');


    }

    /*add a new contact*/


    /**
     *
     */






}