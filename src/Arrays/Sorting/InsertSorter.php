<?php

namespace Vladchekunov\Algs\Arrays\Sorting;

use Vladchekunov\Algs\Traits\Swapable;

class InsertSorter extends Sorter
{
    /**
     * Sorting with the Insert Method.
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        for ($wallIterator = 1; $wallIterator < count($array); $wallIterator++) {
            $currentItem = $array[$wallIterator];

            $sortedIndex = $wallIterator;
            while ($sortedIndex>0 && $array[$sortedIndex - 1] > $currentItem){
                $array[$sortedIndex] = $array[$sortedIndex - 1];
                $sortedIndex--;
            }

            $array[$sortedIndex] = $currentItem;
        }

        return $array;
    }
}