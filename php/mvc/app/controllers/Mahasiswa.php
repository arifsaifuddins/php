<?php

class Mahasiswa extends Controller {

  public function index() {

    $data["judul"] = 'Daftar Mahasiswa';
    $data["mhs"] = $this->model( 'Mahasiswa_model' )->getMahasiswa();

    $this->view( 'template/header', $data );
    $this->view( 'mahasiswa/index', $data );
    $this->view( 'template/footer' );
  }

  public function detail( $id ) {

    $data["mhs"] = $this->model( 'Mahasiswa_model' )->getMahasiswaById( $id );
    $data["judul"] = $data['mhs']['nama'];

    $this->view( 'template/header', $data );
    $this->view( 'mahasiswa/detail', $data );
    $this->view( 'template/footer' );
  }

  public function tambah() {

    if ( $this->model( 'Mahasiswa_model' )->tambahDataMahasiswa( $_POST ) > 0 ) {

      Flasher::setFlash( 'berhasil', 'ditambahkan', 'success' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    } else {

      Flasher::setFlash( 'gagal', 'ditambahkan', 'danger' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    }
  }

  public function hapus( $id ) {

    if ( $this->model( 'Mahasiswa_model' )->hapusDataMahasiswa( $id ) > 0 ) {

      Flasher::setFlash( 'berhasil', 'dihapus', 'success' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    } else {

      Flasher::setFlash( 'gagal', 'dihapus', 'danger' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    }
  }

  public function getUbah() {

    echo json_encode( $this->model( 'Mahasiswa_model' )->getMahasiswaById( $_POST['id'] ) );
  }

  public function ubah() {

    if ( $this->model( 'Mahasiswa_model' )->ubahDataMahasiswa( $_POST ) > 0 ) {

      Flasher::setFlash( 'berhasil', 'diubah', 'success' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    } else {

      Flasher::setFlash( 'gagal', 'diubah', 'danger' );

      header( "Location: " . BASEURL . "/mahasiswa" );
      exit;
    }
  }

  public function cari() {

    $data["judul"] = 'Daftar Mahasiswa';
    $data["mhs"] = $this->model( 'Mahasiswa_model' )->cariMahasiswa();

    $this->view( 'template/header', $data );
    $this->view( 'mahasiswa/index', $data );
    $this->view( 'template/footer' );
  }

}

?>