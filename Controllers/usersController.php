<?php

class usersController extends Controller {

    function index(){
        require(ROOT . 'Models/Users.php');

        $users = new Users();
        $d['users'] = $users->showAllusers();
        $this->set($d);
        $this->render("index");

    }

    function create(){

        if (isset($_POST["name"]))
        {
            require(ROOT . 'Models/Users.php');
            $users = new Users;

            if ($users->create($_POST["name"], $_POST["email"], $_POST["password" ]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        
        $this->render("create");

    }
    
    function detail($id)
    {
        require(ROOT . 'Models/users.php');

        $detalle = new Users();
        $d['detalle'] = $detalle->showUser($id);
        $this->set($d);
        $this->render("detail");
    }

    function edit($id)
    {
        require(ROOT . 'Models/users.php');
        $users= new Users();

        $d["users"] = $users->showUser($id);

        if (isset($_POST["name"]))
        {
            if ($users->edit($_POST["name"],$_POST['email'], $id))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Users.php');

        $users = new Users();
        if ($users->delete($id))
        {
            header("Location: " . WEBROOT . "users/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }

    

}

?>