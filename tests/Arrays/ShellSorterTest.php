<?php

namespace Tests\Arrays;

use \PHPUnit\Framework\TestCase;
use Vladchekunov\Algs\Arrays\Sorting\BubbleSorter;
use Vladchekunov\Algs\Arrays\Sorting\ShellSorter;

class ShellSorterTest extends TestCase
{
    /**
     * @test
     * @dataProvider getProblems
     */
    public function itCanSort($problem, $solution)
    {
        $sorter = new ShellSorter();
        $result = $sorter->sort($problem);

        $this->assertEquals($solution, $result);
    }

    public function getProblems()
    {
        return [
            [[1, 765, 123, 23, 124], [1, 23, 123, 124, 765]],
            [[5, 4, 3, 2, 1], [1, 2, 3, 4, 5]],
            [[1, 2, 3], [1, 2, 3]],
        ];
    }
}