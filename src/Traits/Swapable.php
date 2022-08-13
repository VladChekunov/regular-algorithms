<?php

namespace Vladchekunov\Algs\Traits;

trait Swapable{
    /**
     * Swap two elements of array.
     *
     * @param $firstItem
     * @param $secondItem
     */
    protected function swap(&$firstItem, &$secondItem)
    {
        $bufferItem = $firstItem;

        $firstItem = $secondItem;
        $secondItem = $bufferItem;
    }
}