<html>
    <head>
        <title>編輯資料</title>
    </head>
    <body>
    <?php
        $link=mysqli_connect("127.0.0.1","root","123456789","school") or die("無法接資料庫:".mysql_error());
        $query="select * from student where sno='".$_GET['sno']."'";
        echo $query;
        $result=mysqli_query($link,$query) or die("無法連線到資料表".mysql_error());
        while($row=mysqli_fetch_array($result)){
    ?>    
        <form action="update.php" method="POST">
            學號 : <input type="text" name="sno" value="<?=$row['sno'];?>" /><br><br>
            姓名 : <input type="text" name="sname" value="<?=$row['sname'];?>"/><br><br>
            年齡 : <input type="text" name="sage" value="<?=$row['sage'];?>"/><br><br>
            性別 : 
                <input type="radio" name="ssex" value="男"<?php echo ($row['ssex']=="男") ? "checked":""; ?> />男 
                <input type="radio" name="ssex" value="女"<?php echo ($row['ssex']=="女") ? "checked":""; ?> />女 <br><br>

            <input type="hidden" name="O_sno" value="<?=$row["sno"];?>"/>
            <input type="submit" value="送出" />
            <input type="reset" value="清除" />
        </form>
    <?php
        }
    ?>
    </body>
</html><br><br>

<a href="table2.php">回到學生基本料表</a>
