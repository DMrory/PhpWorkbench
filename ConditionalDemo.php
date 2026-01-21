<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Demo</title>
</head>
<body>
    <?php 
    $x = 15;
    $y = 5;
    if ($x >$y) {
        echo "$x is greater than $y";
    }
    else if ($x < $y) {
        echo "$x is less than $y";
    }
    else {
        echo "both are equal";
    }
    ?>
</body>
</html>