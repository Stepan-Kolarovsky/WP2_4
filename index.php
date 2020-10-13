<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $computer0 = array(
            'CPU' => "AMD Ryzen 9 3900X",
            'RAM' => "HyperX Predator 32GB (4x8GB) DDR4 3200",
            'GPU' => "GIGABYTE GeForce RTX 2080 SUPER Gaming oc waterforce WB 8G GDDR6",
            'SSD' => "Intel SSD DC P4600, 2,5 - 2TB",
            'MB' => "GIGABYTE B550 AORUS ELITE",
            'case' => "BITFENIX Enso Mesh RGB",
            'mouse' => "Logitech G Pro",
            'headphones' => "SteelSeries Arctic Pro",
            'display' => "BenQ PD3220U",
            'fan' => "Thermaltake Riing Duo",
        );
        $computer1 = array(
            'CPU' => "Intel Core i9-10980XE",
            'RAM' => "Corsair Vengeance RGB LED 128GB (8x16GB)",
            'GPU' => "MSI GeForce RTX 3090 GAMING X TRIO 24G, 24GB GDDR6X",
            'SSD' => "Intel Optane 905P, PCI-Express - 960GB",
            'MB' => "GIGABYTE X299 DESIGNARE EX - Intel X299",
            'case' => "EK Water Blocks Classic InWin 303EK, černá",
            'mouse' => "Razer Mamba + Firefly Hyperflux",
            'headphones' => "SteelSeries Arctis Pro Wireless, černá",
            'display' => "ASUS ProArt PA32UCX-PK - LED monitor 32",
            'fan' => "Corsair ML140 PRO RGB, 140mm",
        );

    ?>
<h2>1. pc</h2>
Procesor: <?= $computer0['CPU'] ?> <br>
RAM paměti: <?= $computer0['RAM'] ?> <br>
Grafická karta: <?= $computer0['GPU'] ?> <br>
SSD paměti: <?= $computer0['SSD'] ?> <br>
Základní deska: <?= $computer0['MB'] ?> <br>
Skříň: <?= $computer0['case'] ?> <br>
Myš: <?= $computer0['mouse'] ?> <br>
Sluchátka: <?= $computer0['headphones'] ?> <br>
Monitor: <?= $computer0['display'] ?> <br>
Větrák: <?= $computer0['fan'] ?> <br>

<h2>2. pc</h2>
Procesor: <?= $computer1['CPU'] ?> <br>
RAM paměti: <?= $computer1['RAM'] ?> <br>
Grafická karta: <?= $computer1['GPU'] ?> <br>
SSD paměti: <?= $computer1['SSD'] ?> <br>
Základní deska: <?= $computer1['MB'] ?> <br>
Skříň: <?= $computer1['case'] ?> <br>
Myš: <?= $computer1['mouse'] ?> <br>
Sluchátka: <?= $computer1['headphones'] ?> <br>
Monitor: <?= $computer1['display'] ?> <br>
Větrák: <?= $computer1['fan'] ?> <br>
</body>
</html>