<?php
  namespace App\Controllers\admin;
  use App\Controllers\BaseController;

  class IndexController extends BaseController {

    public function getIndex(){
      return $this->render('admin/admin.twig');
    }
  }
