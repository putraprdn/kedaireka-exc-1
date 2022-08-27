<?php

/*  Dibawah ini merupakan fungsi yang bernama 'printArrKelipatanTigaDanEmpat(arr)' 
    yang menerima 1 buah parameter yaitu 
    
    'arr' berupa Array.

    Anda diharapkan untuk melengkapi fungsi tersebut agar ketika fungsi dijalankan akan mem-print angka yang merupakan kelipatan 3 & 4.
    
    CONTOH: 
=>  input parameter 'arr' yaitu [4, 12, 5, 24, 8, 9, 10]
=>  maka hasil/outputnya adalah: 
    12 
    24

    CONTOH 2:
=>  input paramater 'arr' yaitu [2, 4, 72 6, 8]
=>  maka hasil/outputnya adalah: 
    72

*/

function printArrKelipatanTigaDanEmpat($arr)
{
    // Tulis code kalian dibawah ini (code dapat kalian tambah/ubah sesuai kreativitas kalian).
    foreach ($arr as $index => $value) {
        if ($value % 3 === 0 && $value % 4 === 0) {
            echo "$value\n";
        }
    }
}

printArrKelipatanTigaDanEmpat([2, 4, 72, 6, 8]);

/**
 * OR
 * Return result in array
 */
function printArrKelipatanTigaDanEmpat_alternative($arr)
{
    // Tulis code kalian dibawah ini (code dapat kalian tambah/ubah sesuai kreativitas kalian).
    $resultArr = [];
    $i = 0;
    foreach ($arr as $index => $value) {
        if ($value % 3 === 0 && $value % 4 === 0) {
            $resultArr[$i] = $value;
            $i++;
        }
    }
    print_r($resultArr);
    return $resultArr;
}
echo "\n-- Alternative solution --\n";
printArrKelipatanTigaDanEmpat_alternative([4, 12, 5, 24, 8, 9, 10]);
