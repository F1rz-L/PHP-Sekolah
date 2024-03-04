<?php 

// $hari=11;
//  switch ($hari) {
//     case '1':
//        echo 'minggu; 
//         break;
//     case '2':
//        echo 'senin'; 
//         break;
//     case '3':
//        echo 'selasa'; 
//         break;
    
    
//     default:
//         echo 'hari belum ada';
//         break;
//  }  

$pilihan ='kali';

switch ($pilihan) {
    case 'tambah':
        echo 'anda memilih tambah';
        break;
    
    case 'ubah':
        echo 'anda memilih ubah';
        break;
    case 'hapus':
        echo 'anda memilih hapus';
        break;
    
    default:
        echo 'Pilihan belum ada';
        break;
}
?>