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



session_start();
if(!isset($_SESSION["username"])){
    include "login.php";
}

    else {
        
        echo '
              <form style="width:45%;margin:auto;" action="duzenleprocess.php" method="POST">
            
          <h1 class="baslik">Ne düzenlenecek?</h1>
          <a href="eklesistemi.php">Ürün Eklemek İstiyorum</a>
          <br><br><br>
            
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Hizmetler</label>
          ';



        if ($result2->num_rows > 0) {
           
        while($row2 = $result2->fetch_assoc()) {
            
          echo "<BR/>Hizmet ".$row2['id'];
          echo "";
          echo '<input name="hizmetAdi'.$row2['id'].'" value="'.$row2['hizmetAdi'].'" id="form3Example4" class="form-control inputColor" />';
          echo '<input name="hizmetAciklama'.$row2["id"].'" value="'.$row2['hizmetDesc'].'" id="form3Example4" class="form-control inputColor" />';

        }
        
        echo '  
        </div>';

        
        echo '<div class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Şirket:</label>';

        while($row4 = $result4->fetch_assoc()) {
            echo "<BR/>Şirket Bilgileri: ";
          echo '<input name="sirketName" value="'.$row4['isim'].'" id="form3Example4" class="form-control inputColor" />';
          echo '<input name="sirketNo" value="'.$row4['numara'].'" id="form3Example4" class="form-control inputColor" />';
          echo '<input name="sirketAdress" value="'.$row4['adres'].'" id="form3Example4" class="form-control inputColor" />';
        }
        echo '  
        </div>
        <input name="hizmetsayisi" type="hidden" value="'.mysqli_num_rows($result2).'"/>
        <input name="urunsayisi" type="hidden" value="'.mysqli_num_rows($result3).'"/>
        <input name="sirketsayisi" type="hidden" value="'.mysqli_num_rows($result4).'"/>';

        echo '

        <button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #097340 !important;
        border-color: #097340 !important;">Düzenlemeyi Uygula</button>



        </form>';


        echo '<div style="display: grid;
        justify-items: stretch;
        align-items: stretch;
        justify-content: center;
        align-content: space-evenly;">
        <label class="form-label" for="form3Example3">Ürünler</label>';

        while($row3 = $result3->fetch_assoc()) {
            echo "<BR/><p style='color:black;'>Ürün: ".$row3['id']."</p>";
          echo '<input name="urunName'.$row3['id'].'" value="'.$row3['urunName'].'" id="form3Example4" class="form-control inputColor" disabled />';
          echo '<input name="urunDesc'.$row3["id"].'" value="'.$row3['urunDesc'].'" id="form3Example4" class="form-control inputColor" disabled />';
          echo '<input name="urunPrice'.$row3["id"].'" value="'.$row3['urunPrice'].'" id="form3Example4" class="form-control inputColor" disabled/>';
          echo '<input name="urunPhoto'.$row3["id"].'" value="'.$row3['urunPhoto'].'" id="form3Example4" class="form-control inputColor" disabled/>';
          echo '<a href="urunsil.php?id='.$row3["id"].'"><button type="button" class="btn btn-danger">SİL</button></a>';
          

        }
        echo '  
        </div>';

        


        }

        

     
}



?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


