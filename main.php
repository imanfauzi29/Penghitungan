<?php

require "matematika_dasar.php";
require "segitiga.php";
require "persegi.php";

$red = "\033[91m";
$green = "\033[92m";
$yellow = "\033[93m";
$blue = "\033[94m";
$pink = "\033[95m";
$bluesea = "\033[96m";

function welcome()
{
    system('clear');

    global $green;
    global $yellow;
    global $red;
    echo "$green --------------------**********--------------------\n";
    sleep(1);
    echo "$yellow    SELAMAT DATANG DI PENGHITUNGAN MATEMATIKA\n";
    sleep(1);
    echo "$red               Tools made by: mr.f_my\n";
    sleep(1);
    echo "$green --------------------**********--------------------\n\n\n";
    sleep(1);
    menu();
};

function menu()
{
    global $bluesea;
    global $red;
    echo "$bluesea Pilih Tools:\n";
    echo "1. Tools Matematika Dasar (ex: pertambahan, perkalian, ...)\n";
    echo "2. Tools Hitung Segitiga.\n";
    echo "3. Tools Hitung Persegi.\n";
    echo "pilih: ";
    $pilih = trim(fgets(STDIN));
    if ($pilih == 1) {
        return dasar();
    } elseif ($pilih == 2) {
        return segitiga();
    } elseif ($pilih == 3) {
        return persegi();
    } else {
        echo "$red anda memasukan pilihan yang salah!\n";
        sleep(1);
        echo " selamat tinggal!!!\n";
        sleep(1);
        echo " jangan lupa solat\n";
        sleep(1);
    }
}

welcome();
