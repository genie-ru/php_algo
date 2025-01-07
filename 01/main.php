<?php
function cocktailSort(array $numbers): array {
    $lenNumbers = count($numbers);
    $swapped = true;
    $start = 0;
    $end = $lenNumbers - 1;

    while ($swapped) {
        $swapped = false;

        for ($i = $start; $i < $end; $i++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $temp;
                $swapped = true;
            }
        }

        if (!$swapped) {
            break;
        }

        $swapped = false;
        $end--;

        for ($i = $end - 1; $i >= $start; $i--) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $temp;
                $swapped = true;
            }
        }

        $start++;
    }

    return $numbers;
}

$nums = [];
for ($i = 0; $i < 10; $i++) {
    $nums[] = rand(0, 1000);
}

echo "Original array: \n";
echo "[" . implode(", ", $nums) . "]\n";

$sortedNums = cocktailSort($nums);

echo "\nSorted array: \n";
echo "[" . implode(", ", $sortedNums) . "]\n";
