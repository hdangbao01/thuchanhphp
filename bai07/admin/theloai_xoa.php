<?php
include("../connect.php");
if(isset($_GET["IDTL"]))
{
	$key=$_GET["IDTL"];

}
	$sl="delete from theloai where IDTL=".$_GET["IDTL"];

if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}

?>