<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM tipe_pakaian";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_tipe_pakaian.php" role="button">Create Pakaian</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>id</th>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['tipe']?></td>
                        <td>
<a class="btn btn-warning" href="edit_tipe_pakaian.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_tipe_pakaian.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['tipe']?>?')) {return false}"
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