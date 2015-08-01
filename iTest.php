<?php
$oriarray = array(0, 0, 100, 3, 5, 4, 6, 4, 2, 100, 2, 100);
$oriarray1 = array(0, 0, 100, 3, 5, 4, 6, 4, 2, 100, 2, 100,2,4,5,6,7,4,0,0);
$output = array();

fwrite(STDOUT, "Enter output number: ");
$n = trim(fgets(STDIN));

$output = array_count_values($oriarray);
arsort($output);
$result = array_slice($output,0,$n,TRUE);
print_r($result);

?>
