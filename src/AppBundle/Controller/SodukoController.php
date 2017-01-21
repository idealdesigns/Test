<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Soduko;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SodukoController extends Controller
{
    /**
     * @Route("/validate",name="validate")
     * @Method({"POST"})
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function validateSodukuAction(Request $request)
    {
        $board = $request->request->get("board");

        Soduko::validate($board);

        return new JsonResponse(null,204);
    }


    /**
     * @Route("/finished",name="finished")
     * @Method({"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function isSudukoFinishedAction(Request $request)
    {
        $board = $request->request->get("board");
        Soduko::isSudokuFinished($board);

        return new JsonResponse(null,204);
    }
}

