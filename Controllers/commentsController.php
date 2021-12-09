<?php

class commentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/comment.php');

        $comments = new Comment();

        $d['comments'] = $comments->showAllcomments();
        $this->set($d);
        $this->render("index");
    }
/* 
    function user()
    {
        require(ROOT . 'Models/comment.php');

        $comments = new Comment();

        $d['users'] = $comments->showAllusers();
        $this->set($d);
        $this->render("create");
    } */


    function create()
    {
        require (ROOT . 'Models/Users.php');

        $users= new Users();
        $d['users'] = $users->showAllusers();
        $this->set($d);

          
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Comment.php');
            
            if ($comments->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        
        $this->render("create"); 
    }

    function edit($id)
    {
        require(ROOT . 'Models/comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->edit($id);

        if (isset($_POST["body"]))
        {
            if ($comment->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/comment.php');

        $comment = new Comment();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comments/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>