<?php 
$member = $_SESSION['userlogin'];
$cari="select * from transaksitbl where username ='".$member."' and status ='0' order by notransaksi desc";
$query=Yii::app()->db->createCommand($cari)->query();
foreach ($query as $hasil){}
if($hasil > 0){
$faktur = $hasil['notransaksi'];
}else{
$query = "insert into transaksitbl 	(username,status)
		Values ('$member','0')";
$result = Yii::app()->db->createCommand($query)->query();

$cari="select * from transaksitbl order by notransaksi desc";
$query=Yii::app()->db->createCommand($cari)->query();
foreach($queri as $hasil){}
if($hasil > 0){
$faktur = $hasil['notransaksi'];
}
}
?>