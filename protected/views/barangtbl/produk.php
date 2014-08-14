<?php
$ambilid = Barangtbl::model()->findByPk('id');
$id = $_GET['id'];
	$query = "select * from barangtbl where id = '".$id."'";
	$hasil = Yii::app()->db->createCommand($query)->query();
	$temukan = $hasil->rowCount;
	foreach($hasil as $data){}
	if($temukan==0){
	}else{
?>

		
	<div class="col-sm-9 padding-right">
	  <div class="product-details"><!--product-details-->
	    <div class="col-sm-5">
		  <div class="view-product">
		<img width='200px' height='225px' valign='top' border='1,5' src="<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/<?php echo $data['gambar']; ?>"><br><br>
				</div>	
			</div>	
					
     
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
    	<h2><?php echo $data['nama']; ?><br><br></h2>
		<span>
        <label>Ukuran :</label><?php echo $data['ukuran']; ?><br><br>
        <label>Warna :</label><?php echo $data['warna']; ?><br><br>
		<label>Deskripsi :</label><?php echo $data['deskripsi']; ?><br><br>
        <span><?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br></span><button type="button" class="btn btn-fefault cart">
		<i class="fa fa-shopping-cart"></i>Add to cart
		</button>
		</span>
    </div>	
    </div>
	</div>
	</div>

   
     
<?php
	}
?>