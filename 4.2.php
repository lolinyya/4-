<?php
function isPerfectNumber($n):bool {
    if ($n < 1) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i === 0) {
            $sum += $i;
        }
    }
    return $sum === $n;
}

function findPerfectNumber($arr) {
    foreach ($arr as $num) {
        if (isPerfectNumber($num)) {
            return $num;
        }
    }
    return null;
}

$arr = [6, 12, 28, 5, 7];
$perfectNum = findPerfectNumber($arr);
echo "Идеальное число в массиве: " . ($perfectNum ?? "Не найдено"); 