<?php

  namespace App\Controllers;
  use App\Controllers\BaseController;

  class IndexController extends BaseController {

    public function getIndex(){
      global $posts,$pdo;
      return $this->render('index.twig',['posts'=>$posts]);
    }
  }
