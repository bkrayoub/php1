
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="t.php" method="GET">
        <input type="text" name="in1">
        <input type="text" name="in2">
        <button>click</button>
        <p name="p"></p>
    </form>
</body>
</html>
<?php

    $input1 = $_GET["in1"];
    $input2 = $_GET["in2"];
    $res = 0;

    if ($input2 == !"" and $input1 == !""){
        $res = $input2 - $input1;
        
        if ($res >= 0 and $res <= 150){
            if($res >= 0 and $res < 100){
                $res1 = $res + ($res * 0.794);
                echo $res1;
            }
            if($res > 100){
                $res1 = $res + ($res * 0.883);
                echo $res1;
            }
        }
        else{
            if($res > 150 and $res <= 210){
                $res1 = $res * 0.9451;
                echo $res1;                
            }
            if($res > 210 and $res <= 310){
                $res1 = $res + ($res * 1.0489);
                echo $res1;
            }
            if($res > 310 and $res <= 510){
                $res1 = $res + ($res * 1.2915);
                echo $res1;
            }
            if($res > 510){
                $res1 = $res + ($res * 1.4975);
                echo $res1;
            }
        }
        
    }
    else {
        echo "tfo 3la mok";
    }
?>