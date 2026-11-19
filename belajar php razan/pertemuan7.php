<?php
// Operator Aritmatika
$a = 5;
$b = 2;

// penjumlahan
$c = $a + $b;
print "$a + $b = $c";
print "<hr>";

// pengurangan
$c = $a - $b;
print "$a - $b = $c";
print "<hr>";

// Perkalian
$c = $a * $b;
print "$a * $b = $c";
print "<hr>";

// Pembagian
$c = $a / $b;
print "$a / $b = $c";
print "<hr>";

// Sisa bagi
$c = $a % $b;
print "$a % $b = $c";
print "<hr>";

// Pangkat
$c = $a ** $b;
print "$a ** $b = $c";
print "<hr>";

// Operator Penugasan

$speed = 83;

// ini operator aritmatika
$speed = $speed + 10;

// maka nilai speed akan sama dengan 83 + 10 = 93

// ini operator penugasan
$speed += 10;

// sekarang nilai speed akan menjadi 93 + 10 = 103


// Operator Increment & Decrement
$score = 0;

$score++;
$score++;
$score++;

print $score;

// Operator Relasi

$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
print "$a > $b: $c";
print "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
print "$a < $b: $c";
print "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
print "$a == $b: $c";
print "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
print "$a != $b: $c";
print "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
print "$a >= $b: $c";
print "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
print "$a <= $b: $c";
print "<hr>";

// Operator Logika
$a = true;
$b = false;

// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
print "<hr>";

// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
print "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
print "<hr>";

// operator int
// a = 00111100
// b = 00001101

// Operasi AND

// a = 00111100
// b = 00001101
// a & b = 00001100

//Operasi OR
// a = 00111100
// b = 00001101
// a | b = 00111101

// Operasi NOT (Negasi/kebalikan)
// a = 00111100
// ~a  = 11000011

$a = 60;
$b = 13;

// bitwise AND
$c = $a & $b;
print "$a & $b = $c";
print "<br>";

// bitwise OR
$c = $a | $b;
print "$a | $b = $c";
print "<br>";

// bitwise XOR
$c = $a ^ $b;
print "$a ^ $b = $c";
print "<br>";

// Shift Left
$c = $a << $b;
print "$a << $b = $c";
print "<br>";

// Shift Right
$c = $a >> $b;
print "$a >> $b = $c";
print "<br>";

// Operator Ternary

$suka = true;

// menggunakan operator ternary
$jawab = $suka ? "iya": "tidak";

// menampilkan jawaban
print $jawab;
?>