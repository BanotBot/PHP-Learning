<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate the Date return</title>
</head>
<body>

    <?php

        $birthdate = "Nov 26 1983";
        $convert = new DateTime($birthdate);
        $convert->format("Y-m-d");

        $currentDate = new DateTime();
        $currentDate->format("Y-m-d");
        
        $interval = date_diff($convert, $currentDate);
        $days = $interval->format("%d") - 1;
        
        echo $interval->format("Y : %y \nM : %m \nD: $days");
        
    ?>

</body>
</html>