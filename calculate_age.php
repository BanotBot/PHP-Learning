<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        $birthdate = "Nov 26 1983";    
        $date = new DateTime($birthdate);

        $year = $date->format("Y");
        $month = $date->format("m");
        $day = $date->format("d");

        $currentDate = date("d");
        $currentYear = date("Y");
        $currentMonth = date("m");

        echo "current Month : $month <br>";
        echo "year $year";
        echo "currentYear : $currentYear";

        $age = $currentYear - $year;
        if ($currentMonth < $month) {
            $age - 1;
        }

        echo "Age :  $age";
    ?>
</body>
</html>