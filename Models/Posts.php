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


public function delete($id)
{
    
    $sql = 'DELETE FROM posts WHERE id = ?';
    try{   
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
    catch(PDOException $e){
        print_r($e->getMessage());
    }
}

public function showPost($id)
    {
        $sql = "SELECT * FROM posts WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
}




?>