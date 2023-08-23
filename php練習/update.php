<?php
    
    $link=mysqli_connect("127.0.0.1","root","123456789","school") or die("無法接資料庫:".mysql_error());
    $query="UPDATE `student` SET `sno` = '".$_POST['sno']."',`sname` = '".$_POST['sname']."',
     `sage` = '".$_POST['sage']."',
     `ssex` = '".$_POST['ssex']."' WHERE `student`.`sno` = '".$_POST['O_sno']."';";
    echo $query;
    $result=mysqli_query($link,$query) or die("無法接資料庫:".mysql_error());

    if($result==1){
        echo "<script>alert('修改成功');</script>";
        echo "<script>location.href='table2.php'</script>";
    }
    else{
        echo "<script>alert('修改失敗');</script>";
        echo "<script>history.go(-1)</script>";
    }

?>