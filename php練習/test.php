<html>
    <head>
        <title>Hello!</title>
    </head>
    <body>
        <?php
            echo "Hi, I'm a new student!<p>";
        ?>
        <form action="add.php" method="POST">
            學號 : <input type="text" name="sno" /><br><br>
            姓名 : <input type="text" name="sname" /><br><br>
            年齡 : <input type="text" name="sage" /><br><br>
            性別 : 
                <input type="radio" name="ssex" value="男"/>男 
                <input type="radio" name="ssex" value="女"/>女 <br><br>
            <input type="submit" value="送出" />
            <input type="reset" value="清除" />
        </form>
    </body>
</html>
