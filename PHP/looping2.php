<form>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KELAS</th>
        </tr>

        <?php for ($no = 1, $i = 1, $a = 10; $i <= 10, 
                    $a >= 1; $i++, $a--){ ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo "Nama ke $i" ?></td>
                            <td><?php echo "Kelas ke $a" ?></td>
                        </tr>   
                    <?php $no++; } ?>

        
    </table>
</form>