<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius to Fahrenheit</title>

    <style>
        body{
            display: grid;
            align-items: center;
            justify-content: center;
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(29,253,217,0.21052170868347342) 50%, rgba(252,176,69,1) 100%);
        }
        .container{
            display: flex;
            font-size: 20px;
            padding-top: 200px;
            
        }
    </style>

</head>
<body>
    <div class="container">
    <?php

          $celcius = 32;
          $fahrenheit = '';

          if($celcius=32){
              $fahrenheit = $celcius*9/5+32;
          }
          printf("32º Celcius is %.2fº Fahrenheit.", $fahrenheit);
          ?>
    </div>
</body>
</html>