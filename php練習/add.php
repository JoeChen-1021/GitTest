<?php
    $link=mysqli_connect("127.0.0.1","root","123456789","school") or die("無法接資料庫:".mysql_error());
    $query="INSERT INTO `student` (`sno`, `sname`, `sage`, `ssex`) VALUES ('".$_POST['sno']."',
     '".$_POST['sname']."', '".$_POST['sage']."', '".$_POST['ssex']."');";
    $result=mysqli_query($link,$query) or die("無法接資料庫:".mysql_error());

    echo "<script>alert('新增完成');</script>";
    echo "<script>location.href='list.php'</script>";
    
?>