<?php

$data = [
    'MON'   => 1, 
    'TUE'   => 2,
    'WED'   => 4,
    'THU'   => 8,
    'FRI'   => 16,
    'SAT'   => 32,
    'SUN'   => 64
];

function reverseDay($data, $value) {
    arsort($data);
    var_dump($data);

    $current_total = 0;
    $output = [];
    
    foreach ($data as $key => $val) {
        // check if val > 42
        if ($val > $value) {
            continue;
        }

        // echo $val;
        $current_total += $val; // 0 + 32 = 32, 32 + 16 = 48,  32 + 8 = 40, 40 + 4 = 44, 40 + 2 = 42

        if ($current_total > $value) {
            $current_total -= $val; // 48 - 16 = 32, 40 - 4 = 42
            continue;
        }  

        $output[] = $key;
    }

    return $output;
}

$result = reverseDay($data, 21);
krsort($result);
echo '<br>';
foreach ($result as $key => $value) {
    echo $value . ((array_key_last($result) === $key) ? '' : ',');
}
