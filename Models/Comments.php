<?php
class Comments extends Model
{
    public function create($body)
    {
        $sql = "INSERT INTO comments (body, created_at, updated_at) VALUES (:body, :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'body' => $body,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showTask($id)
    {
        $sql = "SELECT * FROM comments WHERE user_id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showAllcomments()
    {
        $sql = "SELECT * FROM comments";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function edit($id, $title, $description)
    {
        $sql = "UPDATE comments SET title = :title, description = :description , updated_at = :updated_at WHERE task_id = :task_id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'task_id' => $id,
                'title' => $title,
                'description' => $description,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM comments WHERE id = ?';
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