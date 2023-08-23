
<?php
    
    $link=mysqli_connect("127.0.0.1","root","123456789","school") or die("無法接資料庫:".mysql_error());
    $query="select * from student";
    $result=mysqli_query($link,$query) or die("無法送出".mysql_error());
    while($row=mysqli_fetch_array($result)){
        echo $row["sname"]."<br>";
        
    }
    
?>
<br><br>
<a href="table2.php">回到學生基本料表</a>