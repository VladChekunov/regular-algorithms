<?php

namespace Vladchekunov\Algs\Arrays\Sorting;

use Vladchekunov\Algs\Traits\Swapable;

class SelectionSorter extends Sorter
{
    use Swapable;

    /**
     * Sorting with the Bubble Method.
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        for ($wallIterator = count($array)-1; $wallIterator >= 0; $wallIterator--) {
            $largestItemIndex = 0;

            for ($iterator = 1; $iterator <= $wallIterator; $iterator++) {
                if($array[$iterator] > $array[$largestItemIndex]){
                    $largestItemIndex = $iterator;
                }
            }

            $largestItem = &$array[$largestItemIndex];
            $currentWallItem = &$array[$wallIterator];

            $this->swap($largestItem, $currentWallItem);
        }

        return $array;
    }
}