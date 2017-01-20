<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
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

        // process each cell only once
        for ($row = 0; $row < 9; ++$row) {
            for ($column = 0; $column < 9; ++$column) {
                $current = $board[$row][$column];
                if (is_integer($current) || is_null($current)) {
                    // determine which of the "cubes" the row/col fall in
                    $cube = 3 * ($row / 3) + ($column / 3);

                    if ((isset($rows[$row]) && $rows[$row] == $current) ||
                        (isset($columns[$column]) && $columns[$column] == $current) ||
                        (isset($cubes[$cube]) && $cubes[$cube] == $current)
                    ) {
                        throw new HttpException(400, "Invalid Soduko Board");
                    }


                } else {
                    throw new HttpException(400, "Board contains invalid character: $current");
                }
            }


        }

        return new JsonResponse(null,204);
    }
}

