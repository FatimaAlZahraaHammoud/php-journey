<?php
    
    function mergeSort(&$array1, $beg, $end){

        if ($beg < $end){
            $mid = intdiv($beg + $end, 2);
            mergeSort($array1, $beg, $mid);
            mergeSort($array1, $mid + 1, $end);
            merge($array1, $beg, $end, $mid);
        }
    }

    function merge(&$array1, $beg, $end, $mid){
        $i = 0; $j = 0; $k = 0;

        $n1 = $mid - $beg + 1;
        $n2 = $end - $mid;

        $leftArray = []; 
        $rightArray = [];

        for ($i = 0; $i < $n1; $i++) {
            $leftArray[$i] = $array1[$beg + $i];
        }
        for ($j = 0; $j < $n2; $j++) {
            $rightArray[$j] = $array1[$mid + 1 + $j];
        }

        $i = 0;
        $j = 0;
        $k = $beg;

        while ($i < $n1 && $j < $n2){
            if($leftArray[$i] <= $rightArray[$j]){
                $array1[$k] = $leftArray[$i];
                $i++;
            }
            else{
                $array1[$k] = $rightArray[$j];
                $j++;
            }
            $k++;
        }

        while( $i < $n1){
            $array1[$k] = $leftArray[$i];
            $i++;
            $k++;
        }

        while( $j < $n2){
            $array1[$k] = $rightArray[$j];
            $j++;
            $k++;
        }
    }

    $array = [7, 26, 90, 17, 3, 2];
    mergeSort($array, 0, count($array) - 1);
    echo "Sorted Array: " . implode(", ", $array);
?>