<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body>

    
    <?php 
    function convert($num) {
        $celsius = (($num - 32) * 5) / 9;
        $celsius = round($celsius);
       
       if ($celsius <= 5) {
        echo "Very Cold";
            }

       else if ($celsius < 10 && $celsius > 5) {
        echo  "Cold";
            }

       else if ($celsius < 15 && $celsius > 10) {
         echo "Pleasant";
            }
       else if ($celsius < 20 && $celsius > 15) {
             echo "Warm";
            }
       else if ($celsius > 20) {
         echo  "Hot";
            }
  

    }

    ?>

<div><?php convert(40) ?></div>
<div><?php convert(45) ?></div>
<div><?php convert(51) ?></div>
<div><?php convert(60) ?></div>
<div><?php convert(70) ?></div>
   <!-- 40
   45
   51
   60 -->

      

 


</body>
</html>
