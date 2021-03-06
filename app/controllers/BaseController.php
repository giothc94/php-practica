<?php
namespace App\Controllers;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_SimpleFilter;

class BaseController{

  protected $templateEngine;

  public function __construct(){
    $loader = new Twig_Loader_Filesystem('../views');
    $this->templateEngine=new Twig_Environment($loader, [
      'debug'=>true,
      'cache'=>false
    ]);
    $this->templateEngine->addFilter(new Twig_SimpleFilter('url',function($path){
      return BASE_URL .$path;
    }));
  }

  public function render($filename, $data=[]){
    return $this->templateEngine->render($filename, $data);
  }
}
