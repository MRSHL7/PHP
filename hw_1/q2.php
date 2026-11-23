<?php
function CalculatePerimeter($length,$width){
    $perimeter = 2 * ($length + $width);
    return $perimeter; 
}
$result = CalculatePerimeter(10,2);
echo "Perimeter : $result";
?>
