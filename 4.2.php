<?php

function isPerfectNumber(int $n): bool
{
    if ($n < 1) {
        return false;
    }
    $sumOfDivisors = 0; 
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i === 0) {
            $sumOfDivisors += $i;
        }
    }
    return $sumOfDivisors === $n; 
}

function findPerfectNumber(array $numbers): ?int 
{
    foreach ($numbers as $number) { 
        if (isPerfectNumber($number)) { 
            return $number; 
        }
    }
    return null;
}

$numbers = [6, 12, 28, 5, 7]; 
$perfectNumber = findPerfectNumber($numbers); 
echo "Идеальное число в массиве: " . ($perfectNumber ?? "Не найдено"); 