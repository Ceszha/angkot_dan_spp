<?php

function lampumerah($lampumerah, $kondisiterminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8, $kt9, $kt10){
    echo "<h1>=== LAMPU LALU LINTAS ===</h1>";
    for($lampumerah; $lampumerah <= $kondisiterminasi; $lampumerah++){
        if($lampumerah == $kt1 || $lampumerah == $kt2 || $lampumerah == $kt4 || $lampumerah == $kt6 || $lampumerah == $kt10){
            echo "Lampu lalu lintas no - $lampumerah tidak lancar <br/>";
        }else if($lampumerah == $kt3 || $lampumerah == $kt5 || $lampumerah == $kt7 || $lampumerah == $kt8){
            echo "Lampu lalu lintas no - $lampumerah tidak berfungsi <br/>";
        }else if($lampumerah == $kt9){
            echo "Lampu lalu lintas no - $lampumerah sedang diperbaiki <br/>";
        }else{
            echo "Lampu lalu lintas no - $lampumerah lancar <br/>";
        }
    }
}
echo lampumerah(1, 20, 2, 4, 5, 10, 11, 12, 13, 14, 16, 18);


function programspp($nama, $kelas, $kategori, $biayaspp, $tunggakan, $tunggakandenda, $denda, $discount, $total, $status){
    echo "<h1>=== Program SPP Sederhana ===</h1> <br/>";
    echo "Nama lengkap : $nama <br/>";
    echo "Kelas : $kelas <br/>";
    echo "Kategori : $kategori <br/>";

    if($kategori == "Beasiswa" && $tunggakan < 6){
        $tunggakandenda = 5;
        $selisihtunggakan = $tunggakan - $tunggakandenda;
        $biayaspp =$biayaspp * 0.5;

        if($tunggakan >= $tunggakandenda){
            $biayadenda = $denda * $selisihtunggakan;
            $totalspp = $biayaspp * $tunggakan + $biayadenda;
        }else{
            $biayadenda = 0;
            $totalspp = ($biayaspp * $tunggakan) - $discount;
        }
    }else{
        $tunggakandenda = 5;
        $biayaspp = $biayaspp;
        $selisihtunggakan = $tunggakan - $tunggakandenda;

        if($tunggakan >= $tunggakandenda){
            $biayadenda = $denda * $selisihtunggakan;
            $totalspp = $biayaspp * $tunggakan + $biayadenda;
        }else{
            $biayadenda = 0;
            $totalspp = $biayaspp * $tunggakan;
        }
    }

    echo "Biaya SPP : Rp ".number_format($biayaspp)."<br/>";
    echo "Tunggakan SPP : $tunggakan <br/>";
    echo "Biaya Denda : Rp ".number_format($biayadenda)."<br/>";
    echo "Total  : Rp. ".number_format($totalspp)."<br/>";
}

global $discount, $totalspp, $biayadenda;

echo programspp("M. Rizqi Fithyarabbani", "X-RPL2", "Beasiswa", 700000, 7, 5, 100000, $discount, $totalspp, "Sudah Lunas");
?>