<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_tipe_pakaian_id = $_POST['tipe_pakaian_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_ukuran;
   $ar_data[]=$_warna;// 3
   $ar_data[]=$_harga;
   $ar_data[]=$_stok;
   $ar_data[]=$_tipe_pakaian_id;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pakaian (id,nama,ukuran,warna,harga,stok,tipe_pakaian_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pakaian SET id=?,nama=?,ukuran=?,warna=?,harga=?,stok=?,tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pakaian.php');
?>
<?php
require_once "../layouts/footer.php";
?>