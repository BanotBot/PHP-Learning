<?php


function reverseDay($value) {
    
    $data = [
        'MON'   => 1, 
        'TUE'   => 2,
        'WED'   => 4,
        'THU'   => 8,
        'FRI'   => 16,
        'SAT'   => 32,
        'SUN'   => 64
    ];

    foreach ($data as $key => $bit) {
        if (($value & $bit) !== 0) {
            $output[] = $key;
        }
    }

    return $output;
}

echo implode(',', reverseDay(21));