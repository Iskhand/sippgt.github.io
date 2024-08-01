<?php
// $awal = date_create('2020-02-12');
// $akhir = date_create();
// echo $awal;
// echo ('</br>');
// echo $akhir;
// echo ('</br>');
// $diff = date_diff($awal , $akhir);
// echo $diff->format('%a')

$waktustart=date("2019-08-02 04:16:10");
$waktuend=date("Y-m-d h:i:sa");
//echo $waktustart;
//echo $waktuend;
 
$datetime1 = new DateTime($waktustart);//start time
$datetime2 = new DateTime($waktuend);//end time
$durasi = $datetime1->diff($datetime2);
// echo $durasi->format('%Y tahun %m bulan %d hari %H jam %i menit %s detik');
// echo ('</br>');
echo $durasi->format('%a hari ');
?>