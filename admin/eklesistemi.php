<?php
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <form style="margin:auto;margin-top:10vw;width:50vw;" action="urunekle.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Ürün Adı</label>
  <input name="urunAdi" type="text" class="form-control" id="exampleInputEmail1">
  <div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Ürün Açıklama</label>
  <input name="urunDesc" type="text" class="form-control" id="exampleInputEmail1">
  <div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Ürün Fiyatı</label>
  <input name="urunFiyat" type="text" class="form-control" id="exampleInputEmail1">
  <div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
<label class="form-label" for="customFile">Resim</label>
<input name="urunPhoto" type="file" class="form-control" id="customFile" />
</div>
<button type="submit" class="btn btn-primary">Yükle</button>
</form>';



?>