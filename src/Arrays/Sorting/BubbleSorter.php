<?php

namespace Vladchekunov\Algs\Arrays\Sorting;

use Vladchekunov\Algs\Traits\Swapable;

class BubbleSorter extends Sorter
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
            for ($bubbleIterator = 0; $bubbleIterator < $wallIterator; $bubbleIterator++) {
                $currentItem = &$array[$bubbleIterator];
                $nextItem = &$array[$bubbleIterator+1];

                if ($currentItem > $nextItem) {
                    $this->swap($currentItem, $nextItem);
                }
            }
        }

        return $array;
    }
}