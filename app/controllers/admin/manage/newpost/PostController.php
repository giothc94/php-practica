<?php
  namespace App\Controllers\Admin\Manage\Newpost;

  use App\Controllers\BaseController;

  class PostController extends BaseController{

    public function getIndex(){
      global $pdo;
      return $this->render('admin/addposts.twig');
    }

    public function postIndex(){
      global $pdo;
      // $title=$_POST['title'];
      // $content=$_POST['content'];
      $sql='INSERT INTO post (title, post) VALUES (:title,:post)';
      $query=$pdo->prepare($sql);
      $result=$query->execute([
        'title'=>$_POST['title'],
        'post'=>$_POST['content']
      ]);
      header('Location:'.BASE_URL .'/admin/manage');
      return $this->render('admin/addposts.twig',['result'=>$result]);

    }
  }
