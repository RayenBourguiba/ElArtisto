<?php

class PostsC
{
    public function showPosts()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from POSTS"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getPostbyTitle($title)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from POSTS where title = :title"
            );
            $query->execute(
                [
                    'title' => $title
                ]
            );
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getPostbyId($id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from POSTS where id = :id"
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
    public function deletePost($id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "DELETE from POSTS where id = :id"
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
    public function updatePost($post, $id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'UPDATE POSTS SET title = :title, text = :text, img = :img WHERE id = :id'
            );
            $query->execute([
                'title' => $post->getTitle(),
                'text' => $post->getText(),
                'img' => $post->getImg(),
                'id' => $id
            ]);
            echo $query->rowCount();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function getNbComments($id)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'SELECT count(*) from COMMENTS WHERE  post_id = :post_id'
            );
            $query->execute([
                'post_id' => $id
            ]);
            return $query->fetchColumn();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function updateNbComments($id,$nb)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'UPDATE POSTS SET comments_nb=:comments_nb WHERE id = :id'
            );
            $query->execute([
                'comments_nb' => $nb,
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function addPost($post)
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "INSERT INTO posts(title,text,date,img)
                    VALUES (:title,:text,now(),:img)"
            );
            $query->execute([
                'title' => $post->getTitle(),
                'text' => $post->getText(),
                'img' => $post->getImg()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function searchByTitle($title)
    {
        try {
            $title = "%$title%";
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * FROM posts WHERE title like :title"
            );
            $query->execute([
                'title' => $title
            ]);
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}