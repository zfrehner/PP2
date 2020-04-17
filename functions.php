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
        echo "<p>Remove Duplicates: ". array_unique($array);
    }
}