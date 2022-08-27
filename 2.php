<?php

/*  Dibawah ini merupakan fungsi yang bernama 'printStatementIntermediate(nama, usia, domisili, hobi)' 
    yang menerima 4 buah parameter yaitu 
    
    'nama' berupa string 
    'usia' berupa number 
    'domisili' berupa string
    'hobi' berupa string
    
    Anda diharapkan untuk melengkapi fungsi tersebut agar ketika fungsi dijalankan hasilnya menjadi:
    
=>  Nama saya adalah -nama-, usia saya -usia- tahun, domisili saya di -domisili-, hobi saya adalah -hobi-.

    Struktur hasil string harus sesuai hasil diatas.
*/

function printStatementIntermediate($nama, $usia, $domisili, $hobi)
{
    echo "Nama saya adalah ${nama}, usia saya ${usia} tahun, domisili saya di ${domisili}, hobi saya adalah ${hobi}.";
}

printStatementIntermediate('Jack', 25, 'Jakarta', 'Berenang');
