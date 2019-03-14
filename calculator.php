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
        $cStr = '';
        $matches = $negArr = array();
        $tag = strrpos($argv[2], '\\');
        $del = substr($argv[2], 1, $tag - 1);
        $str = substr($argv[2], $tag + 1);
        $matches = explode($del, $str);
        if (!empty($matches)) {
            if (min($matches) >= 0) {
                foreach ($matches as $val) {
                    ($val < 0) ? $negArr[] = $val : '';
                  
                }
                  if (!empty($negArr)) {
                        $cStr = "(".implode($negArr).")";
                    }
                echo "Negative numbers not allowed".$cStr;
                return FALSE;
            }
            if (!empty($matches)) {
                $add = array_sum($matches);
            }
        }
        echo $add;
        return $add;
    }

}

?>