 <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Pilih Disini
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
									<ul>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/all">All</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/accesories">Accesories</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/kaostshirt">Kaos / T-Shirt</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/longdress">Long Dress</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/jeans">Jeans</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/celanapendek">Celana Pendek</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/cardigan">Cardigan</a></li>
											<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/jaket">Jaket </a></li>
										
									</ul>														
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>News</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php 
									$hasil = Yii::app()->db->createCommand()->select()->from('newstbl')->order('tanggal desc')->query();
									foreach($hasil as $data){
									echo "<br>
									<b>$data[tanggal]</b><br>
									<a href='?'>$data[news]</a><br>";
									}
									?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Best Seller</h2>
							<div class="brands-name">
								 <marquee direction="up" height="250" width="250" scrollamount="2" scrolldelay="1" onMouseOut="this.start()" onMouseOver="this.stop()">
									<p class="general" align="center">

									<?php
									$query = "SELECT transaksirincitbl.id, transaksirincitbl.nama, transaksirincitbl.harga, gambar, jumlah, sum(jumlah) as jumlahjual FROM transaksirincitbl inner join barangtbl on transaksirincitbl.id = barangtbl.id GROUP BY transaksirincitbl.id order by jumlahjual desc LIMIT 0, 10";
											$result = Yii::app()->db->createCommand($query)->query();
											$no = 1;
											foreach ($result as $data) {
											?>
									<b><font face="arial" size="2" color="red"><?php echo $no ?></font></b><br><font color="blue"><?php echo $data['nama']; ?></a></font><br><?php echo "Rp" .number_format($data['harga'],2,'.',',').""?><br><img width="150" height="150" src="<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/<?php echo $data['gambar']; ?>"></br></br><br></br>
													
												<?php
												$no=$no+1;
												}
									?>
							</p>
							</marquee>
							</div>
						</div><!--/price-range-->
						
						<div class="price-range"><!--price-range-->
							<h2>Informasi</h2>
							<div class="brands-name">
								<table border=0px cellpadding='20' cellspacing="0" bgcolor="" bordercolor="" align="center">
								<tr>
									<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/home/bca.jpg" alt="" /></td>
									</tr>
									<tr>
									<td><p>0123456789 </p></td>
									</tr>
									<tr>
									<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/home/mandiri.jpg" alt="" /></td>
									</tr>
									<tr>
									<td><p>0123456789 </p></td>
									</tr>
									
									</table>
							</div>
						</div><!--/price-range-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>  
 <?php
$sql = "SELECT * FROM barangtbl ";
$hasil = Yii::app()->db->createCommand($sql)->query();
$numrows = $hasil->rowCount;


?>
<table border=0px cellpadding='70' cellspacing="0" bgcolor="" bordercolor="" align="center">
<tr>
<?php
		$kolom=3;
		$x = 0;
		if($numrows > 0){
		foreach($hasil as $data)
		{
				if ($x >= $kolom) 
				{
				 echo "</tr><tr>";
				 $x = 0;
										}
				 $x++;
?>
<td width="200px" height="150px" align="center">
								<div class="single-products">						
								<div class="product-image-wrapper">
										<div class="productinfo text-center">	
								<?php echo $data['nama']; ?><br><br>										
								<img width='150px' height='200px' valign='top' border='1,5' src="<?php echo Yii::app()->theme->baseUrl;?>/images/Produk/<?php echo $data['gambar']; ?>" ><br><br>
									
									<?php $hargarp = $data['harga'] ?>
									<?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
									<div class="product-overlay">
											<div class="overlay-content">
											<?php $hargarp = $data['harga'] ?>
											<?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
												<?php echo $data['nama']; ?><br><br>
												<?php
												echo '
													<a href="http://localhost/tokoonline/index.php?r=pelanggantbl/ambilcart&id='.$data['id'].'"><class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>';
												?>
											</div>
										</div>
								</div>
								</div>	
								</div>
								 <div>
									<?php
									echo '
										<a href="http://localhost/tokoonline/index.php?r=barangtbl/produk_detail&id='.$data['id'].'"><class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Details</a>';
									?>
								</div>
							</td>
										
							<?php
								}
								}
							?>

						</tr>
						</table>
					
</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
						<div class="recommended_items">
							<ul class="nav nav-tabs">
								<h2 class="title text-center">recommended items</h2>
							</ul>
						</div>
						</div>
					</div><!--/category-tab-->
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/3.jpg" alt="" />
													<h2>Rp 75000,00</h2>
													<p>DC Jeans</p>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/1.jpg" alt="" />
													<h2>Rp 85000,00</h2>
													<p>Jeans Pencil</p>
													
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/4.jpg" alt="" />
													<h2>Rp 55000,00</h2>
													<p>Jeans Pendek</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/5.jpg"alt="" />
													<h2>RP 80000,00</h2>
													<p>Cardigan Coklat </p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/6.jpg" alt="" />
													<h2>Rp 100000,00 </h2>
													<p>Cardigan Hitam</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/8.jpg" alt="" />
													<h2>Rp 95000,00</h2>
													<p>Cardigan Abu-abu</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/9.jpg"alt="" />
													<h2>RP 40000,00</h2>
													<p>Topi Coklat </p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/10.jpg" alt="" />
													<h2>Rp 45000,00 </h2>
													<p>Topi Vespa</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/produkbaru/12.jpg" alt="" />
													<h2>Rp 50000,00</h2>
													<p>Topi Hiphop</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>					
