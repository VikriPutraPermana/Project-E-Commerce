<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pakaian";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_pakaian.php" role="button">Create Pakaian</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Ukuran</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Tipe Pakaian Id</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['warna']?></td>
                        <td><?=$row['ukuran']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['tipe_pakaian_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_pakaian.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_pakaian.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_pakaian.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>
<?php
require_once "../layouts/footer.php";
?>