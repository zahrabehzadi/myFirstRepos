<?php

namespace app\controller;
use app\models as modell;
/*include __DIR__ . '/../../public/autoload.php';*/
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

        require_once(__DIR__ . '/../models/user.php');
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $object = new  modell\user();

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
        /** @var TYPE_NAME $smarty */
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


        $smarty->assign("data", $result);

        $smarty->display('contactlist.tpl');


    }

    /*add a new contact*/


    /**
     *
     */
    public function addcontact()
    {
        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');
        if (isset($_POST['name1']) && isset($_POST['phonenumber'])) {

            require_once(__DIR__ . '/../models/user.php');
            $object = new modell\addcontact();

            $result = $object->add($_POST['name1'], $_POST['phonenumber']);

            if ($result) {

                header("location:http://mvcproject.test/public/access/contactlist");

            } else {

                echo 'error';

            }
        }
        $smarty->display('contactlist.tpl');


    }


    public function editcontact()
    {

        $id3 = $_REQUEST['contid'];


        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');


        $name1 = "";
        $number1 = "";


        require_once(__DIR__ . '/../models/user.php');
        $object1 = new modell\uniqshow();
        $result1 = $object1->ushow($id3);


        if ($result1) {

            foreach ($result1 as $data) {
                $_SESSION['id2'] = $data['contactid'];
                $name1 = $data['name'];
                $number1 = $data['phonenumber'];
            }
        } else {
            echo 'error111';
        }

        $smarty->assign("n", $name1);
        $smarty->assign("p", $number1);
        $smarty->display('editcontact.tpl');
    }


    public function editcontactfinal()
    {

        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');


        require_once(__DIR__ . '/../models/user.php');
        $object = new modell\editcontact();
        $result = $object->edit($_POST['name1'], $_POST['number']);

        if ($result) {

            header("location:http://mvcproject.test/public/access/contactlist");

        } else {

            echo 'error22222';

        }


        $smarty->display('editcontact.tpl');
    }


    public function delete()
    {
        $id5 = $_REQUEST['contid'];

        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');


        require_once(__DIR__ . '/../models/user.php');
        $object = new modell\delete();
        $object->delete($id5);


        header("location:http://mvcproject.test/public/access/contactlist");


        $smarty->display('contactlist.tpl');
    }


    /**
     *
     */
    public function search()
    {

        $smarty = "";
        include(__DIR__ . '/../smartyheader.php');

        $_SESSION['s'] = $_GET['search_name'];
        require_once(__DIR__ . '/../models/user.php');
        $object1 = new modell\search();
        $result3 = $object1->search1();


        $smarty->assign("datares", $result3);
        $smarty->display('searchresult.tpl');

    }


}