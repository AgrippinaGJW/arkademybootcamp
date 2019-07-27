<?php
    $kata = " hmmm.. ";
	$teks_awal = trim($kata); //buang spasi di awal dan akhir kalimat.
	$teks_modif = strtolower($teks_awal); //ganti kalimat menjadi huruf kecil semua
	$teks=str_replace(" ","",$teks_modif); //buang spasi yang ada di tengah kata
	$jumlah = strlen($teks); //menghitung jumlah karakter

	//substr_count adalah fungsi menghitung jumlah huruf/kalimat
	$a = substr_count($teks, "a"); 
	$i = substr_count($teks, "i"); 
	$u = substr_count($teks, "u"); 
	$e = substr_count($teks, "e"); 
	$o = substr_count($teks, "o"); 

	$vowels = $a+$i+$u+$e+$o; //hitung total jumlah huruf vowels
    
    echo "Kata \"".$teks_awal."\" memiliki jumlah vowels = $vowels	\n";
?>
