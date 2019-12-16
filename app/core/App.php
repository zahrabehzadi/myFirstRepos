<?php

class app
{


    public function __construct()
    {
        $this->parsUrl();
    }


    /**
     *
     */
    public function parsUrl()
    {

        if (isset($_GET['url'])) {

            $url=explode("/", $_GET['url']);

            $filename = __DIR__ . '/../controller/' . $url[0] . '.php';

            if (file_exists($filename))
            {
                require_once($filename);
                $className = '\app\controller\\' .$url[0]   ;

                if (class_exists($className))
                {
                    if(method_exists($className,$url[1])) {

                        $controller=[$className, $url[1]];

                        unset($url[0],$url[1]);

                        call_user_func_array(  $controller, $url);
                    }
                    else {
                        echo "The method $url[1] does not exist";
                    }

                }
                else {
                    echo "The class $className does not exist";
                }
            } else {
                echo "The file $filename does not exist";
            }
        }


    }

}