<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'root');

if ($connect->connect_error) {
    die('Connection failed: ' . $connect->connect_error);
}
$query = "SELECT * FROM `hizmetler`";
$result2 = $connect->query($query);

$query = "SELECT * FROM `products`";
$result3 = $connect->query($query);

$query = "SELECT * FROM `site`";
$result4 = $connect->query($query);


?>


<!DOCTYPE html>
<html>

<head>
    <meta name="title" content="Gold Oto Kuaför">
    <meta name="description" content="Arabasını sevenlerin adresi Gold Oto Kuaför'e hoşgeldiniz!">
    <meta name="keywords" content="oto, kuaför, oto kuaför, gol oto kuaför, gold oto">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Turkish">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="APOLLONAGENCY">
    <meta charset='utf-8'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GOLD OTO KUAFÖR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/fonts/stylesheet.css'>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <div class="header">
        <h1 style="font-size: 3vw;padding:10px;">GOLD OTO KUAFÖR</h1>
       <a href="tel:+90 543 945 8090">İLETİŞİME GEÇ</a>
    </div>

    <div class="hero">
        <img src="assets/logo.png" alt="">
    </div>

    <div class="anasayfa">
        <div class="hizmetler">




            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="padding-left: 10vw;
                padding-right: 10vw;">
                    <div class="carousel-item active">
                        <H1 class="hizmetBaslik">Boya Koruma ve Bakım Hizmeti</H1>
                        <p class="hizmetAciklama">GOLD OTO kaliteli ve güvenilir hizmetin yıllardır en çok bilinen ve tercih edilen adresidir. Aracınızın hasar onarım ve mini onarım hizmetlerinin yanı sıra otomobilin ilk günkü gibi görünmesini sağlamak ve olduğundan daha kaliteli
                            bir kullanım alanı yaratmak adına boya koruma ve bakım hizmetleri sağlamaktadır.</p>

                    </div>
                       <?php while($row2 = $result2->fetch_assoc()) {
                       echo '
                       <div class="carousel-item">
                        <H1 class="hizmetBaslik">'.$row2['hizmetAdi'].'</H1>
                        <p class="hizmetAciklama">'.$row2['hizmetDesc'].'</p>

                    </div>
                    
                    ';
                    } ?>
                   
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



        <div class="products">
            <h1 class="urunlerText">Ürünlerimiz</h1>
            <?php while($row3 = $result3->fetch_assoc()) {
                echo '
                <div style="background-position: center;background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 100)), url('.$row3['urunPhoto'].');background-size: cover;" class="product">
                <h1 style="font-size: 3vw;">'.$row3['urunName'].'</h1>
                <p style="font-size: 1.5vw;">'.$row3['urunDesc'].'</p>
                <i style="font-size: 1.3vw;">'.$row3['urunPrice'].' TL</i>
            </div>';
            } ?>
            

        </div>
        <div class="footer">
        <?php while($row4 = $result4->fetch_assoc()) {
                echo '
                <h1 style="font-size: 2vw;">'.$row4['isim'].'</h1>
                <p>ADRES:'.$row4['adres'].'</p>
                <p>Telefon:'.$row4['numara'].'</p>
            
            ';
            } ?>
            
        </div>
    </div>



    <!-- <div class="header"></div> -->
</body>

</html>