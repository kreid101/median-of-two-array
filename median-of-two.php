<?php 

$nums1=['1','2'];
$nums2=['7','9','12'];
$farr=array_merge($nums1,$nums2);
sort($farr,SORT_NUMERIC);
if(count($farr) % 2 ==0)
{
    $num1=$farr[count($farr)/2-1 ];
    print $num1." ";
    $num2=$farr[(count($farr)/2) ];
    print $num2." ";
    print ($num1+$num2)/2;
    
}
else
{
    $res = ceil(count($farr)/2-1);
    print $farr[$res];
}



?>