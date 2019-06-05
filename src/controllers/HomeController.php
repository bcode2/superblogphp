<?php
namespace App\controllers;
use App\DoctrineManager;
use Kint;
class HomeController extends Controller
{
    public function index(DoctrineManager $doctrine){
      Kint::dump($doctrine);
      $this->viewManager->renderTemplate("index.view.html");
    }
}