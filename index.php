<?php

// echo "Hello World!";

// Comments

// Ini Komentar

/* 
    Ini
    Komentar
    Panjang
*/

// Variables
// $ {Nama Variabel}
$nama = "Pupun";
$kota = "Kendal";
$usia = 20;

$array = [1,2,3, "Coba", true];
// var_dump($array);

//Echo / Print
// echo "Ini menggunakan echo <br>";
// print "Ini menggunakan print <br>";
// print_r("Ini menggunakan print_r <br>");
// var_dump("Ini menggunakan var_dump");

//Tipe Data
//String
$string = 'string petik satu';
$string2 = "string petik dua ";

$sapa = "Hello, {$nama}";

// echo $sapa;
// echo $string2;

$integer = 150;
$float = 2.5;
$boolean = true;
$array = [1, 2, 3];
// var_dump($float);

//Operator Matematika

// +, -, *, /, %, **
// echo 5**2;

// $x = 5;
// $y = 1;

// $y += $x; // $y = $y + $x;
// echo $y;

// ==, ===, !=, <, >, <=, >=
// $result = ($x == $y);
// echo $result;


//If ... Else ... Elseif
$x = 4;
$y = 1;


// if($x == 2) {
//     $penghubung = "adalah";
// } else {
//     $penghubung = "bukan";
// }

$penghubung = $x == 2 ? "adalah" : "bukan";

// echo "Ini {$penghubung} angka 2";


//Switch
// $a = "satu";

// switch ($a) {
//     case "satu":
//         echo "Ini adalah angka 1";
//         break;
//     case 2:
//         echo "Ini adalah angka 2";
//         break;
    
//     default:
//         echo "Ini bukan angka 1 dan 2";
//         break;
// }


//Looping
//For dan Foreach

// for($i = 1;$i <= 3 ; $i++) {
//     for($j = 1; $j <= 3; $j++) {
//         echo $j;
//     }
//     echo $i . "-";
// }

// Looping pertama : $i = 1, Tampilkan angka 1, $i + 1 => $i = 2
// Looping Kedua : $i = 2, Tampilkan angka 2, $i + 1 => $i = 3
// Looping Ketiga : $i = 3, Tampilkan angka 3, $i + 1 => $i = 4
// Looping Keempat : $i = 4, end


//foreach
$arrOfFPPP = [
    [
        "FPPP" => "123/FPPP/08/2022",
        "Nama Proyek" => "BCA Membangun Bersama",
        "Aplikator" => "PT. ABCD" 
    ],
    [
        "FPPP" => "124/FPPP/08/2022",
        "Nama Proyek" => "BRI Membangun Negeri",
        "Aplikator" => "Budi" 
    ],
];

echo $arrOfFPPP[0]["Nama Proyek"];

// foreach ($arrOfFPPP as $key => $value) {
//     // print_r($value["FPPP"]);
//     echo "No. FPPP  dari {$value["FPPP"]} dengan nama proyek {$value["Nama Proyek"]} <br>";
// }


// Function

function sum($a, $b = 3) {
    return $a + $b;
}


function hello() {
    return "Hello World!";
}

echo sum(2);
echo "<br>";
echo hello();