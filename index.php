<?php
require_once("Settings/Koneksi.php");
require_once("Settings/Crud.php");

use Settings\Koneksi;
use Settings\Crud;

$db = new Crud();

/*
Menjalankan Query Insert :
$db->insert('tesajah(nama,kelas,npm)',[['azurescarlet','02','1531555']])->execute();
*/
/*
Menjalankan Query Select
$db->select('*')->from('tesajah')->where([['id ='=>'20']])->execute();
*/
/*
Menjalankan Query Update
$db->update('tesajah')->set(['nama'=>'fad','npm'=>'123456'])->where([['id ='=>'20']])->execute();
*/
/*
Menjalankan Query Delete
echo $db->delete('tesajah')->where([['id ='=>'21']])->execute();
*/

 ?>
