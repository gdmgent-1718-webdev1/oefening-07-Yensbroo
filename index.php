<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  
$num = 0;  
$n1 = 0;  
    $n2 = 1;     
    echo $n1.', '.$n2.', ' . PHP_EOL;  
while ($num < 100 )  
    {  
        $n3 = $n2 + $n1;  
        echo $n3.', ' . PHP_EOL;  
        $n1 = $n2;  
        $n2 = $n3;  
        $num = $num + 1;  
    }
    ?>
</body>
</html>