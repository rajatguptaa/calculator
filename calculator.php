<?php

/*
 * Purpose: This is calculator file
 * Author: Rajat Gupta
 */
$call = new Calculator;
if (!empty($argv[1]) && $argv[1] == 'sum') {
    $call->sum($argv);
}

class Calculator {
    /*
     * Purpose: sum - return the sum of two numbers
     * Params: input string
     * Author: Rajat Gupta
     */

    public function sum($argv) {
        $sum = 0;
        $sumValArr = array();
        if (!empty($argv[2])) {
            /* Convert string to array for sum */
            $sumValArr = explode(',', $argv[2]);
            if (!empty($sumValArr)) {
                $sum = array_sum($sumValArr);
            }
        }
        echo $sum;
        return $sum;
    }

}

?>