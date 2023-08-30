<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Looping Bagian 1</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <tr>
          <?php
          $i=1;
          $a=10;
          while( $i <= 10){
            if ($i<=10) {
              echo "<tr>";
            }
            echo "<td>".$i."<td> Nama Ke ".$i."<td> Kelas ke ".$a;
            $i++;
            $a--;
          }
          ?>
        </tr>
      </tr>
    </table>
  </body>
</html>
