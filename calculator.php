<?php

/*
 * Purpose: This is calculator file
 * Author: Rajat Gupta
 */
$call = new Calculator;
if (!empty($argv[1]) && $argv[1] == 'add') {
    $call->add($argv);
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
 /*
     * Purpose: add - return the sum of multiple numbers
     * Params: input string
     * Author: Rajat Gupta
     */

    public function add($argv) {
        $add = 0;
        $sumValArr = array();
        if (!empty($argv[2])) {
            $replaceStr = str_replace('n',',', $argv[2]);
            /* Convert string to array for sum */
            $sumValArr = explode(',', $replaceStr);
            if (!empty($sumValArr)) {
                $add = array_sum($sumValArr);
            }
        }
        echo $add;
        return $add;
    }
}

?>