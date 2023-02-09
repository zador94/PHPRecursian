<?php
function showSumNine($number)
{
    $number = str_split($number);
    $numberSum = array_sum($number);
    if($numberSum <= 9){
        return $numberSum;
    }
    else
    {
        $number = $numberSum;
        return showSumNine($number);
    }
}

echo showSumNine(125);