<?php $file_handle = fopen("convertcsv.csv", "r"); ?>
<table border = 1>
<?php while (!feof($file_handle)):
        $rows = fgetcsv($file_handle, 1024);
        $length = count($rows); ?>
    <tr>
     <?php for ($i = 0; $i < $length; $i++): ?>        
        <td><?= $rows[$i]; ?></td>
    <?php endfor; ?>
    </tr>
<?php endwhile; ?>
</table>    
<?php fclose($file_handle);?>