<?php






function cekKetersediaan($nomor_Angkot) {
    $angkot_Diperbaiki = [2, 9, 12, 17];
    $angkot_Tersedia = [1, 3, 10, 11];

    if (in_array($nomor_Angkot, $angkot_Diperbaiki)) {
        return "Angkot no - $nomor_Angkot sedang diperbaiki <br/>";
    } elseif (in_array($nomor_Angkot, $angkot_Tersedia)) {
        return "Angkot no - $nomor_Angkot tersedia <br/>";
    } else {
        return "Angkot no - $nomor_Angkot tidak tersedia <br/>";
    }
}








for ($angkot = 1; $angkot <= 20; $angkot++) {
    echo cekKetersediaan($angkot) . "\n";
}

?>