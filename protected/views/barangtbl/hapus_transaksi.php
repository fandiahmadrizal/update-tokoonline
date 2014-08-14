<?php session_start();
$user = $_SESSION['userlogin'];
$cek="Select * from transaksitbl where username = '$user' AND status ='0'";
$hasil = Yii::app()->db->createCommand($cek)->query();
$result =$hasil->rowCount;
foreach($hasil as $data){}
if ($result > 0){
$faktur =$data['notransaksi'];
if(isset($_GET['id'])){$id = $_GET['id']; }
$query="delete from transaksirincitbl where notransaksi = $faktur AND id =$id";
$hapus=Yii::app()->db->createCommand($query)->query();
if($query){
	header("location:cart.php");
}else{
	echo"Data gagal dihapus";
}
}
?>