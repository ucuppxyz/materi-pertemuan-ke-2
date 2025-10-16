<?php

// if statment
// $nilai = 51; 

// if  ($nilai < 32){   
//     echo "bakso bakar";
// }elseif($nilai >32){   
//     echo "cireng ayam";
// }else{
//     echo"toseng ayam";   
// }


// ternary operator
// $hasil =($nilai > 60) ? "bakso bakar" : "cireng ayam";
// echo ($nilai < 60) ? "bakso bakar" : "cireng ayam";


// switch case
// break untuk keluar dari switch 

// $hari = "minggu";

// switch($hari){
//     case "kamis":
//         echo "ini hari kamis";
//     break;
//     case "jumat":
//         echo "ini hari jumat";
//     break;
//     default:
//         echo "ini hari libur";

// }


// looping
// looping ==> for, while, do while, foreach



// latihan for
// for($index = 1;$index <= 10; $index++ ){
//     echo $index;
// }


// for($index = 10;$index >= 1; $index-- ){
//     echo $index;
// }





// while, do while, foreach tugas di rumah

// do while sama untuk lopping 
// ffungsi "\n" untuk membuat baris baru setelah eksekusi
// $nilai =50;

// do{

//     echo "nomor:" . $nilai ."\n";
//     $nilai++;
// } while ($nilai < 70);


// while 
// setelah nilai dia akan langsung mengeksekusi 
// $nilai = 20;
// while($nilai < 30){
//     echo "nomor:". $nilai ."\n";
//     $nilai++;
// }



// foreach
// foreach dipakai khusus buat:
// Ngeloop isi array
// Ngeakses setiap elemen satu per satu
// Gampang, dan lebih clean daripada for kalau cuma butuh baca semua isi array

// coba array looping nama 
// $nama = array("aisyah", "jamal", "kerud");
// foreach ($nama as $loopdata){
//     echo "nama saya ".$loopdata."\n";
// }


// coba foreach nilai
// foreach ($array as $key => $value)
// Artinya: untuk setiap item di array, ambil key (nama siswa) dan value (nilai).
// $nilai_siswa = array(
//     "aisyah" => 30,
//     "kinar" => 90,
//     "salfa" => 40,
//     "silfa" => 60,
// );

// foreach($nilai_siswa as $nama => $nilai){
//     echo "nama: $nama, nilai: $nilai, \n";
// }

// angka
// $nilai = [80, 85, 90, 75];

// foreach ($nilai as $n) {
//     echo "Nilai: $n\n";
// }



// tugas 
// $tanggal = 05;
// $angka = $tanggal;
// while ($angka < 100 ){
//     echo $angka . " ";
//     $angka += $tanggal;
// }


// $nama = "yusuf";
// $jumlahhuruf = strlen($nama);
// $i = 1;
// do {
//     echo "belajar php \n";
//     $i++;

// } while ($i <= $jumlahhuruf);







echo "\n"
?>