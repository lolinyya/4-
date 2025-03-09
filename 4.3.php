<?php
function mostRecent(string $text): string
{
    $words = array_filter(explode(' ', $text)); 

    if (empty($words)) {
        return ''; 
    }

    $wordCounts = array_count_values($words);
    arsort($wordCounts);

    $mostCommonWordCount = reset($wordCounts); 

    $mostCommonWords = array_keys(array_filter($wordCounts, fn($count) => $count === $mostCommonWordCount));

    return implode(' ', $mostCommonWords); 
}

echo mostRecent('кот который ловит мышей - это умный кот');