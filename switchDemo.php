<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Demo</title>
</head>
<body>
    <?php 
    $x = 15;
    $y = 10;
    $op = '*';
    switch ($op)
    {
        case '+': $z = $x + $y;
            echo "Addition is : $z";
            break;
        case '_': $z = $x -$y;
                echo "subtraction is : $z";
                break;
        case '*': $z = $x * $y;
            echo "Multiplication is : $z";
            break;  
        case '/': $z = $x /$y;
            echo "Division is : $z";
            break;   
         case '%': $z = $x % $y;
            echo "Modulus is : $z";
            break; 
        default: echo "invalid operator";            
    }

    ?>
</body>
</html>