<?php
    //nama barang > berat> stok> satuan
    $data_barang = array(
        array("Minyak Bimoli",1,4,'liter'),
        array("Beras Rambutan", 25, 7 , 'kg'),
        array("Gula Sania", 1, 10, 'kg'),
        array("Tepung segitiga biru", 5, 0, 'kg'),
        array("Keripik Kaca",50, 8, 'gram')
    );
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Warung Pak Joy</h1>
    <table >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Berat (kg) </th>
                <th>Berat (gram) </th>
                <th>Berat (milligram) </th>
                <th>Berat (liter) </th>
                <th>Stok</th>
            </tr>
        </thead>
        
        <?php

                for ($row =0; $row<5; $row++){
                    $number = $row+1;
                    echo " <tr>
                            <td>$number</td>";
                    echo "<td>".$data_barang[$row][0]."</td>";
               
                        if ($data_barang[$row][3] == 'liter'){
                            $liter_kg=$data_barang[$row][1]*1;
                            $liter_gram = $data_barang[$row][1]*1000;
                            $liter_miligram=$data_barang[$row][1]*10000;
                            $liter=$data_barang[$row][1];
                            echo "<td>$liter_kg</td>
                                <td>$liter_gram</td>
                                <td>$liter_miligram</td>
                                <td>$liter</td>
                            ";
                        }
                        elseif($data_barang[$row][3] == 'kg'){
                            $kg_liter= $data_barang[$row][1]*1;
                            $kg= $data_barang[$row][1];
                            $kg_gram= $data_barang[$row][1]*1000;
                            $kg_miligram = $data_barang[$row][1]*1000000;
                            echo "<td>$kg</td>
                                <td>$kg_gram</td>
                                <td>$kg_miligram</td>
                                <td>$kg_liter</td>
                            ";
                        }
                        elseif($data_barang[$row][3] == 'gram'){
                            $gram_liter= $data_barang[$row][1]/1000;
                            $gram= $data_barang[$row][1];
                            $gram_kg= $data_barang[$row][1]/1000;
                            $gram_miligram = $data_barang[$row][1]*1000;
                            echo "<td>$gram_kg</td>
                                <td>$gram</td>
                                <td>$gram_miligram</td>
                                <td>$gram_liter</td>
                            ";
                        }
                        elseif($data_barang[$row][3] == 'miligram'){
                            $miligram_liter= $data_barang[$row][1]/1000000;
                            $miligram= $data_barang[$row][1];
                            $miligram_gram= $data_barang[$row][1]/1000;
                            $miligran_kg = $data_barang[$row][1]/1000000;
                            echo "<td>$miligram_kg</td>
                                <td>$miligram_gram</td>
                                <td>$miligram</td>
                                <td>$miligram_liter</td>
                            ";
                        }
                    if ($data_barang[$row][2]==0){
                        
                        echo "<td class ='zero'>  Kosong </td>";
                    }else{
                        echo "<td>".$data_barang[$row][2]."</td>";  
                    }
                    
                     echo "</tr>"  ;
                }   
        ?>
        
    </table>
</body>
</html>