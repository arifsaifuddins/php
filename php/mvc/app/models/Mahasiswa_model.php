<?php

class Mahasiswa_model {

  private $table = 'mahasiswa';
  private $db;

  public function __construct() {

    $this->db = new Database;
  }

  public function getMahasiswa() {

    // return $this->mhs;

    $this->db->query( 'SELECT * FROM ' . $this->table );
    return $this->db->resultSet();
  }

  public function getMahasiswaById( $id ) {

    $this->db->query( 'SELECT * FROM ' . $this->table . ' WHERE id = :id' );
    $this->db->bind( 'id', $id );
    return $this->db->single();
  }

  public function tambahDataMahasiswa( $data ) {

    $query = "INSERT INTO mahasiswa VALUES (
      null, :nama, :jurusan, :nrp, :email, :usia)
    ";

    $this->db->query( $query );

    $this->db->bind( 'nama', $data['nama'] );
    $this->db->bind( 'jurusan', $data['jurusan'] );
    $this->db->bind( 'nrp', $data['nrp'] );
    $this->db->bind( 'email', $data['email'] );
    $this->db->bind( 'usia', $data['usia'] );

    $this->db->execute();
    return $this->db->row();
  }

  public function hapusDataMahasiswa( $id ) {

    $query = "DELETE FROM mahasiswa WHERE id = :id";

    $this->db->query( $query );
    $this->db->bind( 'id', $id );

    $this->db->execute();
    return $this->db->row();
  }

  public function ubahDataMahasiswa( $data ) {

    $query = "UPDATE mahasiswa SET
      nama = :nama,
      jurusan = :jurusan,
      nrp = :nrp,
      email = :email,
      usia = :usia
    WHERE id = :id";

    $this->db->query( $query );

    $this->db->bind( 'nama', $data['nama'] );
    $this->db->bind( 'jurusan', $data['jurusan'] );
    $this->db->bind( 'nrp', $data['nrp'] );
    $this->db->bind( 'email', $data['email'] );
    $this->db->bind( 'usia', $data['usia'] );
    $this->db->bind( 'id', $data['id'] );

    $this->db->execute();
    return $this->db->row();
  }

  public function cariMahasiswa() {

    if ( isset( $_POST['cari'] ) ) {

      $keyword = $_POST['keyword'];
      $query = 'SELECT * FROM mahasiswa WHERE nama LIKE :keyword';

      $this->db->query( $query );
      $this->db->bind( 'keyword', "%$keyword%" );
      return $this->db->resultSet();
    }
  }
}

// private $mhs = [
//   [
//     "nama" => "Arief Saifuddien",
//     "nrp" => "8447535924",
//     "jurusan" => "Islamic Studies",
//     "email" => "arief@mail.com",
//     "usia" => 21,
//   ],
//   [
//     "nama" => "Muchsinin Taj",
//     "nrp" => "365325924",
//     "jurusan" => "Teknik",
//     "email" => "sinin@mail.com",
//     "usia" => 24,
//   ],
//   [
//     "nama" => "Wildan Al Khoir",
//     "nrp" => "8728293924",
//     "jurusan" => "English Language",
//     "email" => "wildan@mail.com",
//     "usia" => 22,
//   ],
// ];

?>