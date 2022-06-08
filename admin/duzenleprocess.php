<?php 

//hizmet
$hizmetAdi1 = $_POST["hizmetAdi1"];
$hizmetAdi2 = $_POST["hizmetAdi2"];
$hizmetAdi3 = $_POST["hizmetAdi3"];
$hizmetAdi4 = $_POST["hizmetAdi4"];
$hizmetAdi5 = $_POST["hizmetAdi5"];


$hizmetAciklama1 = $_POST["hizmetAciklama1"];
$hizmetAciklama2 = $_POST["hizmetAciklama2"];
$hizmetAciklama3 = $_POST["hizmetAciklama3"];
$hizmetAciklama4 = $_POST["hizmetAciklama4"];
$hizmetAciklama5 = $_POST["hizmetAciklama5"];
//hizmet

//Şirket
$sirketAdi = $_POST["sirketName"];
$sirketNo = $_POST["sirketNo"];
$sirketAdres = $_POST["sirketAdress"];
//Şirket

    $connect = mysqli_connect('localhost', 'root', 'root', 'root');
    $sqlveriguncelle = "UPDATE `hizmetler` SET `hizmetAdi` = '$hizmetAdi1', `hizmetDesc` = '$hizmetAciklama1' WHERE id=1";
    $sqlveriguncelle2 = "UPDATE `hizmetler` SET `hizmetAdi` = '$hizmetAdi2', `hizmetDesc` = '$hizmetAciklama2' WHERE id=2";
    $sqlveriguncelle3 = "UPDATE `hizmetler` SET `hizmetAdi` = '$hizmetAdi3', `hizmetDesc` = '$hizmetAciklama3' WHERE id=3";
    $sqlveriguncelle4 = "UPDATE `hizmetler` SET `hizmetAdi` = '$hizmetAdi4', `hizmetDesc` = '$hizmetAciklama4' WHERE id=4";
    $sqlveriguncelle5 = "UPDATE `hizmetler` SET `hizmetAdi` = '$hizmetAdi5', `hizmetDesc` = '$hizmetAciklama5' WHERE id=5";
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle);
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle2);
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle3);
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle4);
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle5);



    $sqlveriguncelle6 = "UPDATE `site` SET `isim` = '$sirketAdi', `numara` = '$sirketNo', `adres` = '$sirketAdres'";
    $sonucveriyukle=mysqli_query($connect,$sqlveriguncelle6);
    

    header("Location: https://goldotokuafor.com/"); 



















?>