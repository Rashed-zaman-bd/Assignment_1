<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>

    <style>
        body{
            height: 100vh;
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,0.21052170868347342) 50%, rgba(252,176,69,1) 100%);
            display: grid;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php

        $num1 = 4;
        $num2 = 5;
        $num3 = 6;

        if($num1>$num2 && $num1>$num3){
           echo "$num1 is largst number.";
        }
         elseif ($num2 > $num1 && $num2 > $num3) {
           echo "$num2 is largest number.";
        }
        else{
           echo "$num3 is largest number.";
        }

        ?>
     </div>  
</body>
</html>




