<?php
  namespace App\Controllers\admin\manage;
  use App\Controllers\BaseController;

  class IndexController extends BaseController{
    public function getIndex(){
      global $pdo;
      $sql='SELECT * FROM post ORDER BY id_post DESC';
      $query=$pdo->prepare($sql);
      $query->execute();
      $queryresult=$query->fetchAll(\PDO::FETCH_ASSOC);
      return $this->render('admin/manage.twig',['queryresult'=>$queryresult]);
    }
  }
