<?php

class Posts extends Model{

public function showAllPosts(){

    $sql = "SELECT * FROM posts";
    try{
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    catch(PDOException $e){
        print_r($e->getMessage());
    }
}




}




?>