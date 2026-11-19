<?php
// fungsi echo()
print "<h2>Belajar PHP itu mudah</h2>";
print("Hello world!<br>");
print "Aku sedang belajar PHP!<br>";
print "Ini ". "teks ". "yang ". "dibuat ". "terpisah.";


// Fungsi print()

print "<h2>Belajar PHP dari Nol!</h2>";
print "Hello world!<br>";
print "Belajar mencetak teks di PHP!<br>";


$cetak = print("hello World!<br>");

// Menggabungkan String atau Teks di PHP

print "Ini ". "teks ". "yang ". "dibuat ". "terpisah.";


$txt1 = "Tutorial PHP";
$txt2 = "petanikode.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Aku belajar pemrograman PHP di " . $txt2 . "<br>";
print $x + $y; 

//Fungsi printf() untuk Formatting Teks

$txt = "petanikode.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);

// misalkan kita punya bilangan dengan notasi E seperti ini
$harga = 100000;

// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga";

// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f", $harga);

//memncetak Tanda Kutip
print 'hari ini hari jum\'at';

?>