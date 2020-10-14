<?php
//Settup sorting system for an array in one loop

$arr = [];
for($i = 0;$i < 5;$i++){
    $rnum = rand(1,100);
    $arr[$i] = $rnum;
    echo "$arr[$i] \n";
    $minvalue = $arr[0];
    if ($arr[$i] < $minvalue){
        

    }
}
echo "first value.$minvalue \n";*/
?>