<?php
    $i = 1;
    $u = 10;
    echo '<table border="1" cellpadding="4">';
        echo '<tr style="background: cyan" align="center">';
            echo '<td>No</td>';
            echo '<td>Nama</td>';
            echo '<td>Kelas</td>';
        echo '</tr>';

         while ( $i <= 10 || $u >= 1) {
            echo '<tr align="center">';
            $n = 1;
            while ( $n <= 1 ) {
                echo "<td>$i</td>";
                echo "<td>Nama ke $i</td>";
                echo "<td>Kelas $u</td>";
                $n++;
            }
            $i++;
            $u--;
            echo '</tr>';
        }
        
    echo "</table>";

?>