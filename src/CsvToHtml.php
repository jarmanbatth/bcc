<?php

$file = file('convertcsv.csv');

foreach ($file as $files) {
   // echo $files . '<br>';
  //list($seq , $first , $last , $age , $gender , $birthday , $city , $phonr , $email ,$ccnumber,$field11 )= explode(',', $files);
    $csv[] = explode (',',$files);
   // print_r($csv);
$rows = fgetcsv($csv[],1024);
echo $rows;
}

?>

<!--<table border='1'>
        <tr>
            <th colspan='13'><h2 style="text-align: center">View List </h2></th>
        </tr>
        <tr style='color:#000;'>
            <th>Seq</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>City</th>
            <th>Phone</th>
            <th>E-Mail</th>
            <th>Phone Number<th>
            <th>CC Number</th>
            <th>Field 11</th>
        </tr>
        <tr>
            <td><?= $csv[0];?></td>
            <td><?= $csv[1];?></td>
            <td><?= $csv[2];?></td>
            <td><?= $csv[3];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
            <td><?= $csv[];?></td>
        </tr>
</table>-->
