<?php
//prints out an array
function printArr($array) {
    foreach($array as $number) {
        echo "$number". "<br>";
    }

    //returns largest in the array
    function largest($array) {
        echo "<p>The max in the array is ". max($array). ".";
    }

    //returns array with duplicates removed
    function removeDups($array) {
        $UniqueArray = array_unique($array);
        foreach($UniqueArray as $number) {
            echo "$number". "<br>";
        }
    }

    //return associative array
    function distribution($array) {

       $countArray = array_count_values($array);
       foreach($countArray as $array => $count) {
           echo  "$array"." -> ". "$count". "<br>";
        }

    }
}