<?php

// assosiative array = akses menggunakan key

$mahasiswa = [
    "nama" => "jambul",
    "nim" => "21215",
];

// echo $mahasiswa['nama'] . "\n";
// echo $mahasiswa["nim"];

foreach($mahasiswa as $key => $value){
    echo "$key : $value";
    echo "\n";
}








echo "\n"
?>