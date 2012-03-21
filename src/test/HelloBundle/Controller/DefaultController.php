<?php

namespace test\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('testHelloBundle:Default:index.html.twig', array('name' => $name));
    }

    public function profileAction($name){
        return $this->render('testHelloBundle:Default:profile.html.twig', array('name' => $name));
    }
}
