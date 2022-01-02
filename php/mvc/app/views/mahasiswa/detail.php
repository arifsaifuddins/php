<div class="container">
  <h2 class="my-5"><?=$data['mhs']["nama"];?></h2>
  <ul class="list-group mb-3 col-lg-6">
    <li class="list-group-item">Nama : <?=$data['mhs']["nama"];?></li>
    <li class="list-group-item">Jurusan : <?=$data['mhs']["jurusan"];?></li>
    <li class="list-group-item">NRP : <?=$data['mhs']["nrp"];?></li>
    <li class="list-group-item">Email : <?=$data['mhs']["email"];?></li>
    <li class="list-group-item">Usia : <?=$data['mhs']["usia"];?></li>
  </ul>
  <a href="<?=BASEURL;?>/mahasiswa" class="btn btn-secondary ">Back</a>
</div>