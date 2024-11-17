<?php

    function isPalindrome($str){
        $count = 0;

        while (isset($str[$count])) {
            $count++;
        }

        for($i = 0; $i < $count / 2; $i++){
            if ($str[$i] != $str[$count - 1 - $i]){
                return false;
            }
        }

        return true;
    }

    $string = "maram";
    if (isPalindrome($string)) {
        echo "$string is a palindrome.";
    } else {
        echo "$string is not a palindrome.";
    }
?>