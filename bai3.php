<?php
function timGiaTri($giaTri, $mang) {
    foreach ($mang as $index => $value) {
        if ($value === $giaTri) {
            return $index;
        }
    }
    return -1;
}

$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banana", $traiCay);
echo $index; // -1
?>  