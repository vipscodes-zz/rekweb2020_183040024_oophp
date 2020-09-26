<?php
define('NAMA', 'Avip Syaifulloh');

// echo NAMA;

const UMUR = 20;
// echo '<br>';
// echo UMUR;

// class Coba
// {
//     const NAMA = "Avip Syaifulloh";
// }

// echo Coba::NAMA;
//constant baris
echo __LINE__;
//constant file
echo __FILE__;

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
