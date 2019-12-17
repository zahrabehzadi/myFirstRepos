<?php

namespace app\controller;

use app\models as modell;

SESSION_START();

class access
{


    /**
     *
     */
    /*user login to contact list*/

    public function login()
    {
        $smarty = "";
        $error = "";
        include(__DIR__ . '/../smartyheader.php');


        if (isset($_POST['username']) && isset($_POST['password'])) {

            require_once(__DIR__ . '/../models/user.php');
            $object = new modell\user();

            $result = $object->login($_POST['username'], $_POST['password']);

            foreach ($result as $data) {
                $value = $data['userid'];
                $_SESSION["id1"] = $value;
            }

            if ($result) {

                header("location:http://mvcproject.test/public/access/contactlist");
            } else {
                $error = 'wrong pass';

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
        include(__DIR__ . '/../smartyheader.php');

        require_once(__DIR__ . '/../models/user.php');
        $object = new modell\contactlist();
        $result = $object->show();

        if ($result) {

            foreach ($result as $data) {

              echo $data['name'] . ':';
              echo $data['phonenumber'] . '</br>';

            }

        } else {

            echo 'error';

        }

        $smarty->display('contactlist.tpl');
    }

/*add a new contact*/


    public function addcontact()
    {
        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');

        if (isset($_POST['name']) && isset($_POST['phonenumber'])) {

            require_once(__DIR__ . '/../models/user.php');
            $object = new modell\addcontact();

            $result = $object->add($_POST['name'], $_POST['phonenumber']);

            if ($result) {

                header("location:http://mvcproject.test/public/access/contactlist");

            } else {

                echo 'error';

            }
        }
        $smarty->display('contactlist.tpl');


    }

}
