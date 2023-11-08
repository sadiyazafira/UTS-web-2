<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja</title>
</head>

<style type="text/css">
    .kotak {
        border: solid 1px black;
        width: 500px;
        height: 350px;
    }    
    .kotak table{
        margin: 10px;
    }

</style>

<body>
    <div class = "kotak">
<?php 
$Dicount = [
    [
        "tanggal" => "08 november 2023", 
        "produk" => [
            "Baju Bayi" => 71000,
            "Diapers" => 153000,
            "Bedak" => 15000,
            "Minyak Telon" => 60000,
            "Baby Oil" => 48000
        ],
    ]
];
?>


<?php

foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["produk"]["Baju Bayi"]+$discountTotal["produk"]["Diapers"]+$discountTotal["produk"]["Bedak"]+$discountTotal["produk"]["Minyak Telon"]+$discountTotal["produk"]["Baby Oil"];

    if ($total >= 300000 ) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Transaksi            : ".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Produk                       : "."</p>";
    echo "<p>"."Baju Bayi (2X35.500)         : "."Rp.".$discountTotal["produk"]["Baju Bayi"]."</p>";
    echo "<p>"."Diapers (3X51.000)           : "."Rp.".$discountTotal["produk"]["Diapers"]."</p>";
    echo "<p>"."Bedak (1X15.000)             : "."Rp.".$discountTotal["produk"]["Bedak"]."</p>";
    echo "<p>"."Minyak Telon (2X30.000)      : "."Rp.".$discountTotal["produk"]["Minyak Telon"]."</p>";
    echo "<p>"."Baby Oil (3x16.000)          : "."Rp.".$discountTotal["produk"]["Baby Oil"]."</p>";
    echo "<p>"."Total                        : "."Rp.".$total."</p>";
    echo "<p>"."Diskon                       : "."Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran             : "."Rp.".$total_bayar."</p>";
}
?>

</div>
</body>
</html>