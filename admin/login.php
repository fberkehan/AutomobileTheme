
<?php 
error_reporting(0);
include "config.php"; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  $username=$_POST["kAdi"];
  $password=$_POST["pass"];
  

  $sql="SELECT * FROM users WHERE uyeName='$username'AND uyePass='$password'";
  $result=mysqli_query(@$baglanti,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  if(mysqli_num_rows($result) == 1)
  {
  $_SESSION["username"] = $username;
  echo '<meta http-equiv="refresh" content="0;">';
  }else
  {

  }


  
  
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<form style="width:45%;margin:auto;" action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">

<h1 class="baslik">Tekrar Hoşgeldiniz!</h1>
<br>

<h4>Giriş Yap</h4>

<div class="form-outline mb-4">
    <input name="kAdi" type="text" id="form3Example3" class="form-control inputColor" />
    <label class="form-label" for="form3Example3">Kullanıcı Adı</label>
  </div>

 <div class="form-outline mb-4">
   <input name="pass" type="password" id="form3Example4" class="form-control inputColor" />
   <label class="form-label" for="form3Example4">Şifrenizi girin</label>
 </div>

 <button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #097340 !important;
    border-color: #097340 !important;">Giriş Yap</button>
    
 

</form>

