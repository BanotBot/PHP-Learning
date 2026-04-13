<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Into Roman </title>
</head>
<body>
    
    <?php
        /**
         * I = 1, V = 5, X = 10, L = 50, C = 100, D = 500, and M = 1000.  
        */
        $val = 1986;
        $arr = [
            "M" => 1000,
            "CM" => 900, 
            "D" => 500,
            "CD" => 400,
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1
        ];
        
        $result = "";
        while ($val != 0) {
            foreach ($arr as $key => $value) {
                
                if ($val >= $value) {
                    echo "$val >= $value = $key <br>";
                    $result .= $key; // MCM
                    $val -= $value; // 1986 - 1000 = 986 - 900 = 86 - 50 = 36 - 10 = 26 - 10 =  16 
                    break;
                }
            }
        }
       
        echo "The Roman numeral of <strong>$val</strong> is : <strong>$result</strong>";
    ?>

</body>
</html>