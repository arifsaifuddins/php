<div class="container">
  <div class="row">
    <div class="col-lg-6 ">
      <h3 class="mt-5"><?=$data["judul"];?></h3>

      <button class="btn btn-secondary my-3 add" data-bs-toggle="modal" data-bs-target="#seeDetail">
        Add Mahasiswa
      </button>

      <form action="<?=BASEURL;?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3 ">
          <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit" id="cari" name="cari">Cari</button>
          </div>
        </div>
      </form>

      <div class="row">
        <div class="col-lg-12">
          <?php Flasher::flash();?>
        </div>
      </div>

      <ul class="list-group mb-3 col-lg-12">
        <?php foreach ( $data["mhs"] as $mhs ): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="text-bold ">
            <?=$mhs["nama"];?>
          </div>
          <div>
            <a href="<?=BASEURL;?>/mahasiswa/detail/<?=$mhs['id'];?>" class="badge bg-secondary ml-1">Detail</a>
            <a href="<?=BASEURL;?>/mahasiswa/edit/<?=$mhs['id'];?>" class="badge bg-success ml-1 edit"
              data-bs-toggle="modal" data-bs-target="#seeDetail" data-id="<?=$mhs['id'];?>">Edit</a>
            <a href="<?=BASEURL;?>/mahasiswa/hapus/<?=$mhs['id'];?>" class="badge bg-danger ml-1"
              onclick="return confirm('yakin ?');">Delete</a>
          </div>
        </li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="seeDetail" tabindex="-1" aria-labelledby="seeDetailLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title label" id="seeDetailLabel">Add Mahasiswa</h5>
      </div>

      <div class="modal-body">
        <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan : </label>
            <select class="form-control" name="jurusan" id="jurusan">
              <option value="Islamic Studies">Islamic Studies</option>
              <option value="Hadits">Hadits</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Law">Law</option>
              <option value="Tarbiyah">Tarbiyah</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nrp">NRP : </label>
            <input type="number" class="form-control" name="nrp" id="nrp">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="usia">Usia : </label>
            <input type="number" class="form-control" name="usia" id="usia">
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success toggle" name="submit">Add New</button>
        </form>
      </div>
    </div>
  </div>
</div>