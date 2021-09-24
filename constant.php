<?php 

// define('NAMA', 'Alsa Lira');
// echo NAMA;
// define tidak bisa disimpan didalam kelas

// echo "<br>";

// const bisa disimpan didalam kelas
// const UMUR = 20;
// echo UMUR;


// class Coba {
//     const NAMA = 'Alsa Lira';
// }

// echo Coba::NAMA;


// echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;





?>