<?php
/**
 * Created by PhpStorm.
 * User: zahra
 * Date: 12/23/2019
 * Time: 1:16 PM
 */

namespace app\controller;
use app\models\contactlist;
require_once(__DIR__ . '/../models/user.php');
require_once(__DIR__ . '/../models/contactlist.php');

SESSION_START();


class panell
{
    public function addcontact()
    {
        $smarty = "";

        include(__DIR__ . '/smartyheader.php');

        if (isset($_POST['name1']) && isset($_POST['phonenumber'])) {

            $object = new contactlist();

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
        include(__DIR__ . '/smartyheader.php');


        $name1 = "";
        $number1 = "";


        $object1 = new contactlist();
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
        include(__DIR__ . '/smartyheader.php');


        $object = new contactlist();
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
        include(__DIR__ . '/smartyheader.php');


        $object = new contactlist();
        $object->delete($id5);


        header("location:http://mvcproject.test/public/access/contactlist");


        $smarty->display('contactlist.tpl');
    }


    public function search()
    {

        $smarty = "";
        include(__DIR__ . '/smartyheader.php');

        $search = $_GET['search_name'];

        $object1 = new contactlist();
        $result3 = $object1->search1($search);


        $smarty->assign("datares", $result3);
        $smarty->display('searchresult.tpl');

    }
    /**
     *
     */

}