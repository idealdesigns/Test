<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/print", name="print")
     */
    public function printSudoku(Request $request)
    {
        $jsonBoard = '
	[{
			"0": 7,
			"1": null,
			"2": null,
			"3": null,
			"4": 4,
			"5": null,
			"6": 5,
			"7": 3,
			"8": null
		},

		{
			"0": 7,
			"1": null,
			"2": 5,
			"3": null,
			"4": null,
			"5": 8,
			"6": null,
			"7": 1,
			"8": null
		}, {
			"0": null,
			"1": null,
			"2": 8,
			"3": 5,
			"4": null,
			"5": 9,
			"6": null,
			"7": 4,
			"8": null
		}, {
			"0": 5,
			"1": 3,
			"2": 9,
			"3": null,
			"4": 6,
			"5": null,
			"6": null,
			"7": null,
			"8": 1
		}, {
			"0": null,
			"1": null,
			"2": null,
			"3": null,
			"4": 1,
			"5": null,
			"6": null,
			"7": null,
			"8": 5
		},

		{
			"0": 8,
			"1": null,
			"2": null,
			"3": 7,
			"4": 2,
			"5": null,
			"6": 9,
			"7": null,
			"8": null
		},

		{
			"0": 9,
			"1": null,
			"2": 7,
			"3": 4,
			"4": null,
			"5": null,
			"6": null,
			"7": null,
			"8": null
		},

		{
			"0": null,
			"1": null,
			"2": null,
			"3": null,
			"4": 5,
			"5": 7,
			"6": null,
			"7": null,
			"8": null
		},

		{
			"0": 6,
			"1": null,
			"2": null,
			"3": null,
			"4": null,
			"5": null,
			"6": null,
			"7": 5,
			"8": null
		}]
';


        $sudoku = json_decode($jsonBoard,true);

        // printing the formated input sudoku
        $output = "<B>Input Sudoku:</B><br />";
        $output.="<table border='1'>";
        foreach ($sudoku as $row) {
            $output .= "<tr>";
            foreach ($row as $col) {
                $output .=  ("<td>" . $col . "</td>");
            }
            $output .= "</tr>";
        }

        $output.="</table>";
        $output .= "<hr />";

        print_r($output);exit;

        return new Response($output);
    }
}
