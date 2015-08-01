u<?php
$unsortarray = array(0, 0, 100, 5, 5, 4, 6, 4, 2, 100, 2, 100);
$sortedarray = array(0,0,0,1,1,1,2,2,3,5,5);
$output = array();
$result = array();

//whatever sort or unsort
$iarray = $unsortarray;
//$iarray = $sortedarray;
foreach($iarray as $item)
{
        if($output[$item]!=null)
        {
                ++$output[$item];
                unset($result[$item]);
        }else{
                $output[$item] = 1;
                $result[$item] = $item;
        }
}
print_r($result);

?>

