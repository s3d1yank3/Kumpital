<?php

namespace UCBL\PidjiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UCBLPidjiBundle:Default:layout.html.twig');
    }
}
