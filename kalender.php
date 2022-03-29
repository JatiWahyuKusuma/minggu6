<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>        
        <table>
        <?php
            $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
            $bulan = "Maret";
            $tahun = 2022;
            $b = 28;
            $c = 1;
            echo "<h2> $bulan  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;$tahun </h2>";
            for($i = 1; $i <= 1; $i++) {
                echo "<tr>";
                for($j = 0; $j < 7; $j++) {
                    echo "<td>". $hari[$j] ."</td>";
                }
            }
            for($i = 1; $i <= 5; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 7; $j++) {
                    if($b >= 29) {
                        echo "<td>". $c ."</td>";
                        $c++;
                    } else {
                        echo "<td id='warna'>". $b ."</td>";
                        $b++; 
                    }
                    if($c == 32) {
                        break;
                    }
                }
            }
        ?>
        </table>
    </body>
</html>