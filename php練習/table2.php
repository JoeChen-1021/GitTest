<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5x4 Table</title>
    <style>
        /* 基礎表格樣式 */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        /* 表頭與表格列樣式 */
        th, td {
            padding: 10px 20px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        /* 當滑鼠移到表格列上時的樣式 */
        tr:hover {
            background-color: #f5f5f5;
        }

        /* 每一行的顏色設定 */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>學生基本料表</h2>

<a href="test.php">新增資料</a>
<table>
    <tr>
        <th>sno</th>
        <th>sname</th>
        <th>sage</th>
        <th>ssex</th>
        <th>編輯/刪除</th>
    </tr>

<?php
    $link=mysqli_connect("127.0.0.1","root","123456789","school") or die("無法接資料庫:".mysqli_error($link));
    $query="select * from student";
    $result=mysqli_query($link,$query) or die("無法送出".mysql_error());
    while($row=mysqli_fetch_array($result)){
?>      
        <tr>
            <td><?php echo $row["sno"]; ?></td>
            <td><?php echo $row["sname"]; ?></td>
            <td><?php echo $row["sage"]; ?></td>
            <td><?php echo $row["ssex"]; ?></td>
            <td>
                <a href="edit.php?sno=<?=$row['sno'];?>"> 編輯 </a>
                <a href="delete.php?sno=<?=$row['sno'];?>"> 刪除 </a>
            </td>
        </tr>
<?php

    }
?>

</table>

</body>
</html>
