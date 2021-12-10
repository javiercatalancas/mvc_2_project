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
}
// FUNCION DELETE



?>