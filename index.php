<?php
    // The Actual template for your code.

    // DO NOT MODIFY THIS FUNCTION
    function arraySortCheck( $arr ) {
        $arraysort = new ArraySort($arr);
        return $arraysort->arrsort();
    }

    class ArraySort {
        // Your code goes here
        public $my_array;
        public function __construct(array $arr)
        {
            $this->my_array = $arr;
        }

        function sort()
        {
            if ($this->arrsort()) {
                sort($this->my_array);
            }

            return print_r($this->my_array);
        }

        function arrsort()
        {
            return count($this->my_array) ? true : false;
        }
    }

    echo "<pre>";

    echo arraySortCheck([1, 2, 3, 4, 8, 5]);
    echo "<br>";
    echo arraySortCheck([]);

    $arraysort = new ArraySort([]);
    $arraysort->sort();

    $arraysort = new ArraySort(array(1, 3, 5, 8, 7, 4, 2));
    $arraysort->sort();

    $arraysort = new ArraySort(array(1, 5, -4, 0, 7, 1, 2));
    $arraysort->sort();
    
    echo "</pre>";

?>
    