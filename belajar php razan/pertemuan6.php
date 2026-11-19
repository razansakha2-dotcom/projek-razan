<?php

// // kita punya konstanta dengan nilai 5
// const SEBUAH_NILAI = 5

// // lalu kita ubah menjadi 10
// SEBUAH_NILAI = 10 // <-- maka akan terjadi error di sini

const PHI = 3.14;
const API_KEY = "182939812739812478u12ehj1h2u3123h12";


// cara membuat konstanta dan contohnya

// // membuat konstanta dengan fungsi define()
// define('DB_SERVER', 'localhost');
// define('DB_USER', 'petanikode');
// define('DB_PASS', 'R4Hasia');
// define('DB_NAME', 'belajar');

// // membuat konstanta dengan kata kunci const
// const API_KEY = "1234"

// membuat konstanta
define('VERSION', '1.0.0');

const SITE_NAME  = "Petani Kode";
const BASE_URL    = "https://www.petanikode.com";

// cetak nilai konstanta
print "Site name: " . SITE_NAME . "<br/>";
print "URL: " . BASE_URL . "<br/>";
print "Version: " . VERSION . "<br/>";
?>