<?php
$inputArray = [234, 5, 7567, "8d", 1, "8d", 34, 7788, 3, "d6", "8d"];

/**
 * Sort function.
 *
 * @param array $input               Input array
 * @param string $sortType           Sort type can be desc or asc.
 * @param boolean $showTimeExecution Flag to show function time execution.
 *
 * @return array
 */
function customSort(array $input, $sortType = 'asc', $showTimeExecution = true)
{
    $start = microtime();
    $arrayLength = count($input);
    for ($i = 0; $i < $arrayLength; $i++) {
        for ($j = $i + 1; $j < $arrayLength; $j++) {
            if ($sortType == 'asc' && (int) $input[$i] > (int) $input[$j] ||
                $sortType == 'desc' && (int) $input[$i] < (int) $input[$j]
            ) {
                $tempValue = (int) $input[$j];
                $input[$j] = (int) $input[$i];
                $input[$i] = $tempValue;
            }
        }
    }

    var_dump($input);
    echo $showTimeExecution ? sprintf("Elapsed for :  %f", microtime() - $start) : '';

    return $input;
}

/* Example. */
customSort($inputArray);
