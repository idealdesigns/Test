<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Sudoku;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SudokuTest extends \PHPUnit_Framework_TestCase
{

    public function testValidate()
    {

        //Valid Board 1
        $jsonBoard1 = '
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
			"0": null,
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
		}

	]
';
        $sudoku = json_decode($jsonBoard1, true);
        $result = Sudoku::validate($sudoku);
        $this->assertTrue($result);



        //Valid Board 2

        $jsonBoard2 = '
     [{
			"0": 7,
			"1": null,
			"2": 1,
			"3": null,
			"4": 4,
			"5": null,
			"6": 5,
			"7": 3,
			"8": null
		},

		{
			"0": null,
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
		}

	]
';
        $sudoku = json_decode($jsonBoard2, true);
        $result = Sudoku::validate($sudoku);
        $this->assertTrue($result);



        //Invalid board, there is a duplicate number in the same Cube, in first Cube
        $jsonBoard3 = '
     [{
			"0": 7,
			"1": null,
			"2": null,
			"3": null,
			"4": 4,
			"5": null,
			"6": 5,
			"7": 3,
			"8": 7
		},

		{
			"0": null,
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
		}

	]
';
        $sudoku = json_decode($jsonBoard3, true);

        try{
            $result = Sudoku::validate($sudoku);

        }catch (\Exception $e){
            $this->assertInstanceOf(HttpException::class,$e);
            $this->assertEquals(400,$e->getStatusCode());
            $this->assertEquals('Invalid Sudoku Board',$e->getMessage());
        }

    }

    public function testIsSudokuFinished()
    {
        //Valid unfinished Board
        $jsonBoard1 = '
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
			"0": null,
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
		}

	]
';
        $sudoku = json_decode($jsonBoard1, true);

        try{
            $result = Sudoku::isSudokuFinished($sudoku);

        }catch (\Exception $e){
            $this->assertInstanceOf(HttpException::class,$e);
            $this->assertEquals(400,$e->getStatusCode());
            $this->assertEquals('Board is not finished',$e->getMessage());
        }


        //Test finished valid Sudoku

    }
}