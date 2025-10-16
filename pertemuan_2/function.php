<?php


// // contoh function yang pertama
// function sapa($nama = "jambul"){
//     echo "Halo, $nama!\n";
// }
// sapa();


// contoh function yang kedua
// function hitungmundur($tahunlahir){
//     $tahunsekarang = date ("2025");
//     $umur = $tahunsekarang - $tahunlahir;
//     return $umur;
// }

// echo "umur kamu: " . hitungmundur(2006) . " tahun". "\n";

// contoh function yang ketiga
// function hitungumur($tgllahir){
//     $lahir = new datetime($tgllahir);
//     $hariini = new datetime();

//         $umur = $hariini->diff($lahir);
//         return $umur->y . " tahun " . $umur->m . " bulan " . $umur->d . " hari"; 
// }

// echo "umur kamu: ". hitungumur("2006-11-05") . "\n";


// funtion = kode untuk melakakukan sesuatu dan bisa di panggil berulang 
// function sapa($umur = 15, $nama = "jambul" ){
//     echo "halo, $nama umur $umur" . "\n";
// }

// sapa();

// function tambah ($a , $b){
//     global $angka;   //global membuat suatu variabel yang bisa diakses di mana saja termasuk di luar negeri
//     $angka = 5;
//     // echo $angka;
//     echo $a + $b;
    
// }
// tambah(5,9696);



// scope/ lingkup variable =>



$nama = readline("masukan nama, ");
echo "halo, $nama";

// rekrusif =>memanggil fungsi didalam fungsi itu sendiri

function simulasi_rekrusif($index = 0){
    echo "rekrusif berjalan";
    if ($index < 3){
        simulasi_rekrusif($index + 1);
    }else{
        echo "rekrusif berhenti";
    };
}

// simulasi_rekrusif();


echo "\n"
?>