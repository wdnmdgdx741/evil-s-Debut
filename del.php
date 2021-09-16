<?php
if(empty($_GET)){
    echo "没有传递删除参数";
    echo "<a href='./index.php'>返回</a>";
}else{
    $link=mysqli_connect("localhost","root",'12345','wdnmd');
    if (!$link) {
        echo "数据库连接失败";
        exit;
    }
    $id=$_GET['id'];
    $sql=mysqli_query($link,"delete from student where id=$id");
    if (!$sql) {
        echo "删除失败";
        echo "<a href='./index.php'>返回</a>";
    }else{
        echo "删除数据成功";
        echo "<a href='./index.php'>返回</a>";
    }
}