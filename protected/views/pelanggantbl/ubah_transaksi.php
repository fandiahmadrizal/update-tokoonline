<?php 
$user = Yii::app()->user->name;
$cek="Select * from transaksitbl where username = '$user' AND status ='0'";
$hasil = Yii::app()->db->createCommand($cek)->query();
$result = $hasil->rowCount;
foreach($hasil as $data){}
if ($result > 0){
	$faktur =$data['notransaksi'];
	
	for ($i=1; $i<=$_POST['n']; $i++)
		{
		$idp = $_POST['id'.$i];
  		$cari2="select * from barangtbl where id='$idp'";
  		$hasil2=Yii::app()->db->createCommand($cari2)->query();
  		foreach($hasil2 as $row2){}
  		$har=$row2['harga'];
  		if($hasil2){
  			$jmlubah  = $_POST['jumlah'.$i];
  			$totubah = $jmlubah*$har;
    		$query = "UPDATE transaksirincitbl SET jumlah = $jmlubah, subtotal=$totubah WHERE id ='$idp' and username = '$user' And notransaksi =$faktur";
    		Yii::app()->db->createCommand($query)->query();;
			
  		}
	}
	
	
}
$this->redirect(array('cart','id'=>Yii::app()->user->name));
?>

