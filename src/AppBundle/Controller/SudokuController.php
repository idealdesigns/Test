<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sudoku;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class SudokuController extends Controller
{
    /**
     * @Route("/validate",name="validate")
     * @Method({"POST"})
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function validateSudokuAction(Request $request)
    {
        $board = $request->request->get("board");
        Sudoku::validate($board);

        return new JsonResponse(null,204);
    }

    /**
     * @Route("/finished",name="finished")
     * @Method({"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function isSudokuFinishedAction(Request $request)
    {
        $board = $request->request->get("board");
        Sudoku::isSudokuFinished($board);

        return new JsonResponse(null,204);
    }
}

