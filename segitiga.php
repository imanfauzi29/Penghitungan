<?php

function segitiga()
{
    global $yellow;
    global $red;
    global $green;

    system('clear');

    echo "$green" . "Selamat datang di Penghitungan Segitiga:\n\n";
    echo "Pilih:\n";
    echo "1) Hitung Keliling Segitiga\n";
    echo "2) Hitung Luas Segitiga\n";
    echo "3) Jumlah Besar Sudut Segitiga\n";
    echo "99) Kembali\n";
    echo "----------------\n\n";
    echo "Pilih (ex: 1, 2, 3, ...) : ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == "99") {

        echo "$red sebentar lagi anda akan keluar!\n";
        sleep(1);
        echo " selamat tinggal!!!\n";
        sleep(1);
        echo " jangan lupa solat\n";
        sleep(1);
    } elseif ($pilih == "1") {

        return keliling();
    } elseif ($pilih == "2") {

        return luas();
    } elseif ($pilih == "3") {

        return besarSudut();
    } else {

        echo "$red Upss!! Pilihan yang anda masukan tidak ada!\n";
        sleep(1);
        ulangi($ulangi = segitiga());
    }
}

function keliling()
{
    global $green;
    global $red;
    global $yellow;
    system(clear);

    echo "$green Keliling segitiga adalah panjang dari ketiga sisi\n";
    print "yang dimiliki oleh sebuah segitiga.\n\n";
    print "$yellow   --------------------------\n";
    sleep(1);
    print "$yellow  |                          |\n";
    sleep(1);
    print "$yellow  |-----$red Rumus Keliling $yellow-----|\n";
    print "  |--------$red Segitiga $yellow--------|\n";
    print " _|                          |_\n";
    sleep(1);
    print "|$red K = sisi A + sisi B + sisi C $yellow|\n";
    print "  |                          |\n";
    sleep(1);
    print "   --------------------------\n\n";
    sleep(1);

    print "$red" . "Note: Kosongkan bila tidak ada nilai (langsung enter)\n\n";
    sleep(1);

    print "$green" . "Masukan keliling (cm); ";
    $k = trim(fgets(STDIN));
    print "Masukan sisi A (cm): ";
    $a = trim(fgets(STDIN));
    print "Masukan sisi B (cm): ";
    $b = trim(fgets(STDIN));
    print "Masukan sisi C (cm): ";
    $c = trim(fgets(STDIN));

    //loading
    echo "$yellow" . "\nSedang menghitung";
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

    // hitung
    if ($a == null) {
        //rumus k = a + b + c
        $h = $b + $c;
        $hasil = $k - $h;
        print "Hasil dari penghitungan: \n";
        sleep(1);
        print "a" . " = " . $k . " - " . $h . "\n";
        sleep(1);
        print "a = " . $hasil . "\n\n";
        ulang();
    } elseif ($b == null) {
        //rumus k = a + b + c
        $h = $a + $c;
        $hasil = $k - $h;
        print "Hasil dari penghitungan: \n";
        sleep(1);
        print "b" . " = " . $k . " - " . $h . "\n";
        sleep(1);
        print "b = " . $hasil . "\n\n";
        ulang();
    } elseif ($c == null) {
        //rumus k = a + b + c
        $h = $a + $b;
        $hasil = $k - $h;
        print "Hasil dari penghitungan: \n";
        sleep(1);
        print "c" . " = " . $k . " - " . $h . "\n";
        sleep(1);
        print "c = " . $hasil . "\n\n";
        ulang();
    } elseif ($k == null) {
        //rumus k = a + b + c
        $h = $a + $b + $c;
        $hasil = $h;
        print "Hasil dari penghitungan: \n";
        sleep(1);
        print "k" . " = " . $a . " + " . $b . " + " . $c . "\n";
        sleep(1);
        print "k" . " = " . $hasil . "\n\n";
        sleep(1);
        ulang();
    }
}

function luas(){
    
}

function ulang()
{
    global $red;

    // ulangi lagi
    echo "ulangi ? (Y/n): ";
    $jawab = trim(fgets(STDIN));
    echo "\n";
    // jika iya
    if ($jawab == 'Y' || $jawab == 'y') {
        return segitiga();
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
