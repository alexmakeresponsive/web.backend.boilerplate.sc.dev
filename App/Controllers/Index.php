<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 20.10.2018
 * Time: 22:08
 */

namespace App\Controllers;


//use App\View;
use App\Controller;

class Index extends Controller
{
    public function action()
    {
        $allPosts = \App\Models\Articel::findAll();

//        $viewIndex = new View();

//        $viewIndex->posts = $allPosts;
        $this->view->posts = $allPosts;
//        $viewIndex->render(__DIR__ . '/../../App/Views/index.php');
        $this->view->render(__DIR__ . '/../../App/Views/index.php');
    }
}