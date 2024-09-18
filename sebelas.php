<?php

require_once 'Pegawai.php';
require_once 'Dosen.php';

use App\Admin\Dosen;

// Membuat objek $dian sebagai instance dari class Dosen
$dian = new Dosen(
    198411132015041001,  
    "Dian Prawira",      
    62111111,            
    "Jln Purnama",       
    "0013118405"         
);


$dian->mengajar();
?>
