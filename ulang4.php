<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
           $number =5;
           $faktorial =1;
           
           do {
               $faktorial *= $number;
               $number = $number - 1;
            }while ($number > 0);
            echo $faktorial;
        ?>
    </body>
</html>