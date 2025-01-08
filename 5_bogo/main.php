<?php

function inOrder(array $numbers): bool {
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] > $numbers[$i + 1]) {
            return false;
        }
    }
    return true;
}

function bogoSort(array $numbers): array {
    while (!inOrder($numbers)) {
        shuffle($numbers);
    }
    return $numbers;
}

$nums = [];
for ($i = 0; $i < 10; $i++) {
    $nums[] = rand(0, 1000);
}

echo "Original array: \n";
echo "[" . implode(", ", $nums) . "]\n";

$sortedNums = bogoSort($nums);

echo "\nSorted array: \n";
echo "[" . implode(", ", $sortedNums) . "]\n";
