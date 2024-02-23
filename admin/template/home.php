<h3>Dashboard</h3>
<br/>
<?php 
	$sql=" select * from barang where stok <= 3";
	$row = $config -> prepare($sql);
	$row -> execute();
	$r = $row -> rowCount();
	if($r > 0){
?>
<?php
		echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";	
	}
?>
<?php $hasil_barang = $lihat -> barang_row();?>
<?php $hasil_kategori = $lihat -> kategori_row();?>
<?php $stok = $lihat -> barang_stok_row();?>
<?php $jual = $lihat -> jual_row();?>
<div class="row">
    <!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header text-white" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 44%, rgba(0,212,255,1) 69%);">
                <h6 class="pt-2"><i class="fas fa-cubes"></i> Nama Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_barang);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header text-white"style="background: rgb(8,36,0);
background: linear-gradient(90deg, rgba(8,36,0,1) 0%, rgba(9,121,105,1) 44%, rgba(254,255,0,1) 69%);">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header text-white" style="background-color:gray">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Telah Terjual</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($jual['stok']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=laporan'>Tabel
                    laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header text-white" style="background: rgb(8,36,0);
background: linear-gradient(90deg, rgba(8,36,0,1) 0%, rgba(109,121,9,1) 40%, rgba(214,0,255,1) 69%);">
                <h6 class="pt-2"><i class="fa fa-bookmark"></i> Kategori Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_kategori);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=kategori'>Tabel
                    Kategori <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
</div>