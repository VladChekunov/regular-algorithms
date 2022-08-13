<?php

namespace Vladchekunov\Algs\Arrays\Sorting;

use Vladchekunov\Algs\Traits\Swapable;

class ShellSorter extends Sorter
{
    use Swapable;

    /**
     * Sorting with the Shall Method.
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        $gap = static::getInitialGap(count($array));

        while ($gap >= 1) {
            for ($index = $gap; $index < count($array); $index++) {
                for ($comparationIndex = $index; $comparationIndex >= $gap; $comparationIndex -= $gap) {
                    $firstItem = &$array[$comparationIndex];
                    $secondItem = &$array[$comparationIndex - $gap];

                    if($firstItem <= $secondItem){
                        $this->swap($firstItem, $secondItem);
                    }
                }
            }

            $gap /= 3;
        }

        return $array;
    }

    /**
     * Get initial gap value.
     */
    static public function getInitialGap($arrayLength): int
    {
        $gap = 1;

        while ($gap < $arrayLength / 3) {
            $gap = 3 * $gap + 1;
        }

        return $gap;
    }
}