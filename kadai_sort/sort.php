<?php
$nums = [15, 4, 18, 23, 10];
function sort_2way ($array,$order) {
    if ($order === TRUE) {
        echo '昇順にソートします。<br>';
        sort($array);
        foreach ($array as $value) {
        echo $value . '<br>';
        }
    } else {
        echo '降順にソートします。<br>';
        rsort($array);
        foreach ($array as $value) {
        echo $value . '<br>';
        }   
    }
}
sort_2way($nums,TRUE);
sort_2way($nums,FALSE);
?>