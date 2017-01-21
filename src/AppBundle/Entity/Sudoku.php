<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Exception\HttpException;


/**
 * Sudoku
 *
 */
class Sudoku
{


    public static function isSudokuFinished(array $board)
    {
        self::validate($board);

        //Check if there are empty cells
        for ($row = 0; $row < 9; ++$row) {
            for ($column = 0; $column < 9; ++$column) {
                if (is_null($board[$row][$column])) {
                    throw new HttpException(400, "Board is not finished");
                }

            }
        }
    }


    /**
     * Validate
     *
     * @return int
     */
    public static function validate(array $board)
    {

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

                //No zeros allowed
                if (is_int($current) && !is_null($current) && empty($current)) {
                    throw new HttpException(400, "Zeros are not allowed, it must be a number starting from 1 to 9 or NULL");
                }

                if (is_integer($current) || is_null($current)) {
                    // determine which of the "cubes" the row/col fall in
                    $cube = 3 * ($row / 3) + ($column / 3);

                    //
                    //Check if there are repeated numbers in Columns or Rows or Cubes
                    //If $current is null it will not be checked
                    if ((isset($rows[$row]))) {
                        if ($rows[$row] == $current) {
                            self::throwInvalidBoard();
                        }
                    } else {
                        $rows[$row] = $current;
                    }

                    if ((isset($columns[$column]))) {
                        if ($columns[$column] == $current) {
                            self::throwInvalidBoard();
                        }
                    } else {
                        $columns[$column] = $current;

                    }

                    if ((isset($cubes[$cube]))) {
                        if ($cubes[$cube] == $current) {
                            self::throwInvalidBoard();


                        } else {
                            $cubes[$cube] = $current;
                        }

                    }

                } else {
                    throw new HttpException(400, "Board contains invalid character: $current");
                }
            }


        }

        return true;
    }

    public static function throwInvalidBoard()
    {

        throw new HttpException(400, "Invalid Sudoku Board");
    }
}

