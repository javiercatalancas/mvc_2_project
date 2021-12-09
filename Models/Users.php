<?php

class Users extends Model {

    public function create($name, $email, $password, $remember_token){
        $sql = "INSERT INTO users (id, name, email, password, remember_token,created_at, updated_at) VALUES(:id, :name, :email, :password, :remember_token, :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'remember_token' => $remember_token,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }

    }

    public function showAllusers()
    {
        $sql = "SELECT * FROM users";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showUser($id)
    {
        $sql = "SELECT * FROM users WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }



    public function edit($name, $password, $id){
        $sql="UPDATE users SET name = :name, password = :password, updated_at = :updated_at WHERE id=:id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'id' => $id,
                'name' => $name,
                'password' => $password,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }

    }

    public function delete($id){
        $sql = 'DELETE FROM users WHERE id= ?';
        try{   
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([$id]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }


}


?>