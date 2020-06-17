<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    th,td {
        border: 1px solid black;
    }
   </style>
</head>
<body>
<?php
        
        $tensp = ["vinFast","BMW","Mazda"];
        $giasp = [500,800,6.50];
        $xuatxu = ["vietnam","Germany","Japan"];
        $product = [
            ["iphone",500,"Usa"],
            ["Samsung",400,"Korea"],
            ["vinsmart",200,"VietNam"]
        ];
    ?>
    <table>
        <thead>
            <tr>
                <th> STT </th>
                <th> Tensp </th>
                <th> Giasp </th>
                <th> xuatxu </th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($product); $i++) {?>
                <tr>
                <td><?php echo $i + 1 ?></td>
                <?php for($j = 0; $j < count($product); $j++) {?>
                    <td><?php echo $product[$i][$j]?></td>
                <?php } ?>
                </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php
        $stt = 1;
        $tensp = ["vinFast","BMW"];
        $giasp = [500,800];
        $xuatxu = ["vietnam","Germany"];
        
    ?>
</body>
</html>