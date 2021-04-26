<?php
# menghitung drum 1
$diameter_drum1 = 65;
$tinggi_drum1 = 124;
# Radius drum adalah separuh dari diameter
$radius_drum1 = 32.5;
$volume_drum1 = 22 / 7 * $radius_drum1 * $radius_drum1 * $tinggi_drum1;
$jumlah_liter_drum1 = $volume_drum1 / 1000;


# menghitung drum 2
$diameter_drum2 = 30;
$tinggi_drum2 = 87;
# Radius drum adalah separuh dari diameter
$radius_drum2 = 15;
$volume_drum2 = 22 / 7 * $radius_drum2 * $radius_drum2 * $tinggi_drum2;
$jumlah_liter_drum2 = $volume_drum2 / 1000;

# hitung jumlah liter yang tumpah
$liter_tumpah = $jumlah_liter_drum1 - $jumlah_liter_drum2;

echo "Volume Drum 1 adalah = $volume_drum1 <br> ";
echo "Jumlah Liter Dalam Drum 1 =  $jumlah_liter_drum1 <br> <br>";

echo "Volume Drum 2 adalah = $volume_drum2 <br> ";
echo "Jumlah Liter Dalam Drum 2 =  $jumlah_liter_drum2 <br> <br>";

echo "Jumlah Liter Air Yang Tumpah adalah = $liter_tumpah ";
