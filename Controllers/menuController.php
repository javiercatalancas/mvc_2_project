<?php

class menuController extends Controller{


    function index(){

        $this ->render('index');

    }


    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }

}


?>