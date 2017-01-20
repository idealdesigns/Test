<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\HttpException;


class SodukoController extends Controller
{


    /**
     * @Route("/validate",name="validate")
     * @Method({"POST"})
     * @param Request $request
    */
    public function validateSoduku(Request $request)
    {
        $board = $request->request->get("board");


        //Validate if the board is 9x9 array
        if ($board == null || count($board[0]) != 9 || count($board[1]) != 9) {
            throw new HttpException(400, "Board is not valid size for Sudoku.");
        }

        $rows = array();
        $columns = array();
        $cubes = array();


    }
}

