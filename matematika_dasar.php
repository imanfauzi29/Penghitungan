<?php

function dasar()
{
    global $yellow;
    global $red;

    system('clear');

    echo "Selamat datang di Tools Matematika Dasar\n\n";
    echo "OPERATOR:\n";
    echo "x - to kali\n";
    echo "+ - to tambah\n";
    echo "- - to kurang\n";
    echo "/ - to bagi\n";
    echo "q - to back\n\n";
    echo "----------------\n\n";
    echo "masukan operator: ";
    $opr = trim(fgets(STDIN));
    if ($opr == "q") {
        echo "$red sebentar lagi anda akan keluar!\n";
        sleep(1);
        echo " selamat tinggal!!!\n";
        sleep(1);
        echo " jangan lupa solat\n";
        sleep(1);
    } else {
        echo "masukan bilangan pertama: ";
        $bil1 = trim(fgets(STDIN));
        echo "masukan bilangan kedua: ";
        $bil2 = trim(fgets(STDIN));

        echo "$yellow \n tunggu sebentar";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".\n\n";
        sleep(1);

        operator($bil1, $opr, $bil2);
    }
}

function operator($bil1, $opr, $bil2)
{
    global $red;
    global $green;

    if ($opr == "+") {

        $hasil = tambah($bil1, $bil2);
        echo "$green Hasil dari " . $bil1 . $opr . $bil2 . " adalah: " . $hasil . "\n";
        sleep(2);
        ulangi();
    } elseif ($opr == "-") {

        $hasil = kurang($bil1, $bil2);
        echo "$green Hasil dari " . $bil1 . $opr . $bil2 . " adalah: " . $hasil . "\n";
        sleep(2);
        ulangi();
    } elseif ($opr == "x") {

        $hasil = kali($bil1, $bil2);
        echo "$green Hasil dari " . $bil1 . $opr . $bil2 . " adalah: " . $hasil . "\n";
        sleep(2);
        ulangi();
    } elseif ($opr == "/") {

        $hasil = bagi($bil1, $bil2);
        echo "$green Hasil dari " . $bil1 . $opr . $bil2 . " adalah: " . $hasil . "\n";
        sleep(2);
        ulangi();
    } else {
        echo "$red maaf oprator yang anda masukan salah!\n";
        sleep(2);
        ulangi();
    }
}


// fungsi matematika dasar
function tambah($bil1, $bil2)
{
    return $bil1 + $bil2;
}
function kurang($bil1, $bil2)
{
    return $bil1 - $bil2;
}
function kali($bil1, $bil2)
{
    return $bil1 * $bil2;
}
function bagi($bil1, $bil2)
{
    return $bil1 / $bil2;
}


function ulangi()
{
    global $red;

    // ulangi lagi
    echo "ulangi ? (Y/n): ";
    $jawab = trim(fgets(STDIN));
    echo "\n";
    // jika iya
    if ($jawab == 'Y' || $jawab == 'y') {
        return dasar();
    } elseif ($jawab == 'n') {
        return welcome();
    } else {
        echo "$red anda memasukan jawaban yang salah!\n";
        sleep(1);
        echo " selamat tinggal!!!\n";
        sleep(1);
        echo " jangan lupa solat\n";
        sleep(1);
    }
}
