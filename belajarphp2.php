<?php
    //Membuat variable
    $namaDepan = "Hansel";
    $namaBelakang = "Irsansaputra";
    $umur = 18;
    $ipk = 3.91; //float/double
    $hadir = false; //boolean
    $salary = null;

    // echo "Nama Lengkap : ". $namaDepan ." ". $namaBelakang;
    // echo "Nama Lengkap : $namaDepan $namaBelakang";
    // echo "Nama Lengkap : ", $namaDepan ," ", $namaBelakang;
    echo "Nama Lengkap : ${namaDepan} ${namaBelakang}";
    echo "<br/>";
    echo "Umur : $umur Tahun";
    $umur = 19;
    echo "<br/>";
    echo "Umur Sekarang : $umur Tahun";
    unset ($umur); //menghapus variable dinamis

    echo "<br/>";
    echo "Umur Sekarang : $umur Tahun";
    //static variable (define)
    define("TEMPATLAHIR", "Palembang");
    echo "<br/>";
    echo "Tempat Lahir : ". TEMPATLAHIR;

    //variable GLOBAL
    /*
    1. Session --> $_SESSION['Nama'];
    2. Cookiie --> $_COOKIE['namaCookie'];
    3. Post --> $_POST['npm'];
    4. Get --> $_GET['npm'];
    5. Server --> $_SERVER['npm'];
    */
?>