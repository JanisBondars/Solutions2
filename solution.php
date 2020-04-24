<?php

//function maxProfit(array $pricesAndPurchases): int
//{
//    throw new \Exception('Not implemented.');
//}
//
//function stringCost(string $a, string $b,
//                    int $insertionCost, int $deletionCost, int $replacementCost): int
//{
//    throw new \Exception('Not implemented.');
//}

function incrementalMedian(array $values): array
{
    $median = [];
    for ($i = 1; $i <= count($values); $i++) {
        $valuesToCheck = array_slice($values, 0, $i);
        sort($valuesToCheck);
        $count = count($valuesToCheck);
        $midLevel = floor(($count - 1) / 2);
        $median [] = $valuesToCheck[$midLevel];
    }
    return $median;
}

echo implode(",", incrementalMedian([1,1,2,2,2,2]));