<?php

class usersController extends Controller {

    function index(){
        require(ROOT . 'Models/Users.php');

        $users = new Users();
        $d['users'] = $users->showAllusers();
        $this->set($d);
        // FALTA LA VISTA
        $this->render("index");

    }

    function create(){

        require (ROOT . 'Models/Users.php');
            $users= new Users();
            $d['users'] = $users->showAllusers();
            $this->set($d);

        if (isset($_POST["name"]))
        {
            require(ROOT . 'Models/Users.php');

            

            if ($users->create($_POST["name"], $_POST["email"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        
        $this->render("create");

    }

    

}

?>