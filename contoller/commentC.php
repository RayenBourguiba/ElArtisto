<?php


require_once "../back/includes/config.php";
class CommentsC
{
    public function showComments()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from COMMENTS"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getCommentsbyPostId($post_id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from COMMENTS where post_id = :post_id"
            );
            $query->execute(
                [
                    'post_id' => $post_id
                ]
            );
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getCommentbyId($id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from COMMENTS where id = :id"
            );
            $query->execute(
                [
                    'id' => $id
                ]
            );
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function deleteComment($id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "DELETE from COMMENTS where id = :id"
            );
            $query->execute(
                [
                    'id' => $id
                ]
            );
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function updateComment($comment, $id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'UPDATE COMMENTS SET  text = :text  WHERE id = :id'
            );
            $query->execute([
                'text' => $comment->getText(),
                'id' => $id
            ]);
            echo $query->rowCount();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function addComment($comment)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "INSERT INTO COMMENTS(text,date,post_id,user_id)
                    VALUES (:text,now(),:post_id,:user_id)"
            );
            $query->execute([
                'text' => $comment->getText(),
                'post_id' => $comment->getPostId(),
                'user_id' => 1
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}