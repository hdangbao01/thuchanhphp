<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  include_once('../connect.php'); ?>
<table align="center" border="1" width="600">
	<tr align="center">
	<td>Ten The Loai</td>
<td>Thu Tu</td>
<td>An Hien</td>
<td>Bieu tuong</td>
<td colspan="2"><a href="theloai_them.php">Them</a></td>
</tr>
<?php 
	$sql= "select * from theloai";
	$results = mysqli_query($connect,$sql);
	while( ($rows = mysqli_fetch_assoc($results))!= NULL )
	{
?>
<tr align="center">
	<td>
	<?php echo $rows['TenTL']; ?>
</td>
<td>
	<?php echo $rows['ThuTu']; ?>
</td>
<td>
	<?php if ($rows['AnHien'] == 1)
	{
		echo "Hien"; 
    }
		else
	{
		echo "An";
	}
    ?>
</td>
 <td><img src="../image/<?php echo $rows['icon'] ?>" width="75" height="55" /></td>
<td>
	<a href="theloai_sua.php?IDTL=<?php echo $rows['IDTL'];?>">Sua</a>
</td>
<td>
	<a href="theloai_xoa.php?IDTL=<?php echo $rows['IDTL'];?>" onclick="return confirm('Ban co chac chan khong?');">Xoa</a>
</td>
</tr>
<?php } 
mysqli_close($connect);
?>
</table>

</body>
</html>