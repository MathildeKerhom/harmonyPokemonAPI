<?php

namespace Pokemon\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PokemonApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
