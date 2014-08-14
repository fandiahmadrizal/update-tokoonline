<?php 

$id = $_GET['id'];
$cari_barang="select * from barangtbl where id=$id";
$hasil_barang=Yii::app()->db->createCommand($cari_barang)->query();
foreach($hasil_barang as $data_barang){}
$ciri=$data_barang['id'];
$nam=$data_barang['nama'];
$har=$data_barang['harga'];
$member = Yii::app()->user->name;
if (ISSET($member))
{
			if($hasil_barang){
			require("faktur.php");
			$cari_transaksi="select * from transaksirincitbl where username='".$member."' AND id = '".$id."' and notransaksi ='".$faktur."'";
			$hasil_transaksi=Yii::app()->db->createCommand($cari_transaksi)->query();
			$temukan = $hasil_transaksi->rowCount;
			foreach($hasil_transaksi as $data_transaksi){
			}
				if($temukan==0){
				$query = "insert into transaksirincitbl 	(notransaksi,username,id,nama,harga,jumlah,subtotal)
		Values ('$faktur','$member', '$ciri','$nam', '$har', '1', '$har')";
				$result = Yii::app()->db->createCommand($query)->query();
				$this->redirect(array('cart','id'=>Yii::app()->user->name));
			}else{
				$jmllama = $data_transaksi['jumlah'];
				$jmltambah = $jmllama + 1;
				$subtotaltambah = $jmltambah * $har;
				$query = "update transaksirincitbl set jumlah = '".$jmltambah."',subtotal = '".$subtotaltambah."' where notransaksi ='".$faktur."' and id ='".$id."'";
				$result=Yii::app()->db->createCommand($query)->query();
				$this->redirect(array('cart','id'=>Yii::app()->user->name));
			}
			
		}else{
			echo"Data gagal diInput..!";			
			}
}
else
{
	$this->redirect(array('site/index'));
}
?>
