<?php


class postsController extends Controller{
    function index()
    {
        require(ROOT . 'Models/posts.php');

        $posts = new Posts();

        $d['posts'] = $posts->showAllPosts();
        $this->set($d);
        $this->render("index");
    }

    function delete($id)
    {
        require(ROOT . 'Models/posts.php');

        $posts = new Posts();
        if ($posts->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        } else{
            header("Location: " . WEBROOT . "posts/errorpost");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }

}





?>