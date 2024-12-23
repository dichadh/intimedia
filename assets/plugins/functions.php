<?php
function waktuSosialMedia($waktuAwal) {
    // Set zona waktu default
    date_default_timezone_set('Asia/Jakarta');

    $sekarang = new DateTime('now');
    $waktuPost = new DateTime($waktuAwal);

    $selisih = $sekarang->diff($waktuPost);
    
    if ($selisih->y > 0) {
        return $selisih->y . " tahun yang lalu";
    } elseif ($selisih->m > 0) {
        return $selisih->m . " bulan yang lalu";
    } elseif ($selisih->d > 0) {
        return $selisih->d . " hari yang lalu";
    } elseif ($selisih->h > 0) {
        return $selisih->h . " jam yang lalu";
    } elseif ($selisih->i > 0) {
        return $selisih->i . " menit yang lalu";
    } elseif ($selisih->s > 0) {
        return $selisih->s . " detik yang lalu";
    } else {
        return "Beberapa saat yang lalu";
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
}

function OTP(){
    $otpLength = 6; // Panjang OTP (6 angka)
    $otp = '';
    
    for ($i = 0; $i < $otpLength; $i++) {
        $otp .= rand(0, 9); // Menambahkan angka acak dari 0 hingga 9
    }
    return $otp;
}

function maskSensorNumber($sensorNumber) {
    // Hapus semua karakter yang bukan angka
    $sensorNumber = preg_replace("/[^0-9]/", "", $sensorNumber);

    // Periksa apakah panjang nomor sensor sesuai
    if (strlen($sensorNumber) >= 12) {
        // Potong 8 karakter pertama
        $maskedNumber = substr($sensorNumber, 0, 8);

        // Tambahkan format "xxxx-xxxx-xx" dan tambahkan 2 karakter terakhir
        $maskedNumber = substr_replace($maskedNumber, 'xxxx-xxxx-xx', 0, 11);

        // Tambahkan 2 karakter terakhir
        $maskedNumber .= substr($sensorNumber, -2);

        return $maskedNumber;
    } elseif (strlen($sensorNumber) >= 10) {
        // Jika panjangnya 11, maka nomor ini tidak memiliki "0" di depan
        $maskedNumber = substr($sensorNumber, 0, 7);

        // Tambahkan format "xxx-xxxx-xx" dan tambahkan 2 karakter terakhir
        $maskedNumber = substr_replace($maskedNumber, 'xxx-xxxx-xx', 0, 10);

        // Tambahkan 2 karakter terakhir
        $maskedNumber .= substr($sensorNumber, -2);

        return $maskedNumber;
    } else {
        // Handle kasus lainnya
        return "Invalid sensor number";
    }
}



function sensorEmail($email) {
if (strpos($email, "@") !== false) {
    list($username, $domain) = explode("@", $email);
    $username = substr($username, 0, 1) . str_repeat("*", strlen($username) - 1);
    $domainParts = explode(".", $domain);
    $domainCount = count($domainParts);
    if ($domainCount > 1) {
        for ($i = 0; $i < $domainCount - 1; $i++) {
            $domainParts[$i] = substr($domainParts[$i], 0, 2) . str_repeat("*", strlen($domainParts[$i]) - 2);
        }
        $domain = implode(".", $domainParts);
    }
    $email = $username . "@" . $domain;
}
return $email;
}
$credentials = array(
    array('username' => 'info-event@cngme.com', 'password' => 'INev635099'),
    array('username' => 'back-info@cngme.com', 'password' => 'BAfo53213'),
    array('username' => 'temp@cngme.com', 'password' => 'TEmp07381'),
    array('username' => 'temporary@cngme.com', 'password' => 'TEpo24784'),
    array('username' => 'portal-info@cngme.com', 'password' => 'POfo56713'),
    array('username' => 'no-reply@cngme.com', 'password' => 'CNGnorep6287')
);
function getRandomCredentials($credentials) {
    $index = array_rand($credentials);
    return $credentials[$index];
}
$randomCredentials = getRandomCredentials($credentials);

?>