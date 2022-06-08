<?php 
if(isset($_FILES["urunPhoto"])){
    $hata = $_FILES["urunPhoto"]['error'];
    if($hata != NULL) {
        echo "$hata";
        
    } else {
        $urunAd = $_POST["urunAdi"];
        $urunDesc = $_POST["urunDesc"];
        $urunFiyat = $_POST["urunFiyat"];
        
        $isim = $_FILES["urunPhoto"]['name'];
        $dosya = $_FILES["urunPhoto"]['tmp_name'];
        $isimDegistir = rand(1000,100000) . "-" . $_FILES["urunPhoto"]['name'];
        $isimTemizle = str_replace(' ','-',$isimDegistir);
        copy($dosya, 'images/' . $isimTemizle);

        $connect = mysqli_connect('localhost', 'root', 'root', 'root');
        $sqlveriConnect = "INSERT INTO `products` (`id`, `urunName`, `urunDesc`, `urunPrice`, `urunPhoto`) VALUES (NULL, '$urunAd', '$urunDesc', '$urunFiyat', 'admin/images/$isimTemizle')";
        $sonucverisi=mysqli_query($connect,$sqlveriConnect);
        
    
        header("Location: https://goldotokuafor.com/"); 
    

    }

    
   
}else {
    
}



?>