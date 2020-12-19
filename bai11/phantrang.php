<!DOCTYPE html>
<html>
<head>
	<title>Chuyển trang</title>
    <link rel="stylesheet" type="text/css" href="phantrang.css">
</head>
<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "tintuc");
	if(isset($_GET['page'])){
	$page = $_GET['page'];
    }else{
    $page = 1;
    }
    $limit = 5;
    $start = ($page - 1) * $limit;
    $total_title = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM infor"));
    $total_page = $total_title/$limit;

    $query = "SELECT * FROM infor LIMIT ".$start.", ".$limit;
    $result = mysqli_query($conn, $query);
    echo "<div class=\"title\">";
        while($row = mysqli_fetch_array($result)){
        echo '<a href="#">'.$row['id'].'. '.$row['title'].'</a><br />';
    }
    echo "</div>";
    echo "<div class=\"pagination\">";
        for($i = 1; $i <= $total_page; $i++){
        echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a> | ';
    }
    echo "</div>";
    ?>
</body>
</html>