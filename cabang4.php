<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            $tujuan  ="Malang";

            echo "Mau main Kemana ?". $tujuan ."<br>";
            echo "<br> pesan: ";

            switch($tujuan){
                case "Batu";
                    echo "<b> Jangan Lupa Bawa Jaket </b>";
                    break;
                case "Bandung";
                    echo "<b> Awas Kalo Belanja laper mata </b>";
                    break;
                case "Bali";
                    echo "<b> pake sunblock SPF 50 </b>";
                    break;
                default:
                    echo "<b> Yaudah Belajar Aja</b>";
            }
            
        ?>
    </body>
</html>