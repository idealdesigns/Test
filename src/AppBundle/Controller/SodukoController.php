<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class SodukoController extends Controller
{

    /**
     * @Route("/validate",name="validate")
     * @Method({"GET"})
     * @param Reruest $rerquest
     */
    public function validateSoduku(Request $rerquest){
        die("ae");
    }
}
