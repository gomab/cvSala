<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 2/17/18
 * Time: 8:24 AM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function indexAction(){
        return $this->render('views/homepage.html.twig');
    }
}