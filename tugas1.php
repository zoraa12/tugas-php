<?php



$namalengkap = "Irza rafa";
$umur = "16";
$kelas = "XII RPL II";
$ttl = "Banyumas , 11 , agustus , 2007";
$nomor = "085156775872";
$alamat = "jl.abdul muis kemayoran 3 mangga besar";


function mybiodata (){
    global $namalengkap , $umur,$kelas,$ttl,$nomor,$alamat;
    echo "nama : $namalengkap <br />";
    echo "umur : $umur <br />";
    echo "kelas : $kelas <br />";
    echo "tempat tanggal lahir : $ttl <br />";
    echo "nomor telepon yang dapat di hubungi : $nomor <br/>";
    echo "alamat yang dapat di kunjungi : $alamat <br />";
}
echo mybiodata ();



?>