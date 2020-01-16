<?php

function persegi()
{
	print "******************* \n";
	print "  Selamat Datang  \n";
	print " di Tools Persegi  \n";
	print "******************* \n";
	print "\n";

	print "Silahkan Pilih:  \n";
	print "1. Hitung Luas dan Keliling Persegi \n";
	print "2. Hitung Sisi Jika Luas Persegi Di Ketahui \n";
	print "3. Menghitung Sisi jika Diketahui Keliling Persegi \n";
	print "Pilih (1,2,..):  \n";
	$pilih = trim(fgets(STDIN));

	if( $pilih == '1' ){
		return luasDanKll();
	}

}

function luasDanKll()
{
	print "******************* \n";
	print "  L = s x s  \n";
	print "  K = 4 x s  \n";
	print "******************* \n";
	print "\n\n";

	print "masukan sisi: ";
	$s = trim(fgets(STDIN));

	print "Ditanyakan(l = luas, k = keliling): ";
	$d = trim(fgets(STDIN));
	sleep(1);
	print "Diketahui: \n";
	print "S = " . $s . "\n";
	sleep(1);

	print "Ditanyakan: \n";

	if($d == 'l' || $d == 'L'){

		print "Luas \n";
		$d = "luas";
		sleep(1);
		return hitung($d, $s);

	}else if($d == 'k' || $d == 'K'){

		print "Keliling";
		$d = "Keliling";
		sleep(1);
		return hitung($d, $s);

	}else {
		print "Anda Memasukan Kata Yang Salah!\n";
		sleep(1);
		print "Coba Lagi?([Y]es, [n]o, [99]Back, [q]uit): ";

		$j = trim(fgets(STDIN));

	}


}

function hitung($data, $s)
{
	$l 		= "Luas";
	$k 		= "Keliling";

	if ( $data == $l ){
		print "L = s x s";
		print "L = " . $s . " x " . $s;
		print "L = " . $hasil = pow($s, 2);
		print "Lanjutkan ke keliling? ([Y]es, [n]o, [q]uit ): ";
		$j = trim(fgets(STDIN));

		if($j == 'y' || $j == 'Y'){
			kll($hasil);
		}else if( $j == 'n' || $j == 'N' ){
			persegi();
		}else if( $j == 'q' ){
			print "quiting";
			print ".";
			sleep (0.5);
			print ".";
			sleep (0.5);
			print ".";
			sleep (0.5);
			print ".\n";
			sleep (0.5);
			print "Good bye!";
		}else if( $data == $k ){
			kll($s);
		}
	}
}

function kll($n)
{
	$h = 4 * 7;
	print "K = 4 x" . $n . "\n";
	print "hasil: ";
	print "K = " . $h . "\n";

}