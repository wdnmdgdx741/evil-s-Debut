<?php
if (empty($_POST)) {
    require "./add.html";
} else {
    $link = mysqli_connect("localhost", 'root', '12345', 'wdnmd');
    if (!$link) {
        echo "连接数据库失败";
        exit;
    }
    $name = trim($_POST['username']);
    $age = trim($_POST['age']);
    $classID = trim($_POST['class']);
    if (isset($name) && isset($age) && isset($classID)) {

        switch ($classID) {
            case 1:
                $className = '魏国';
                break;
            case 2:
                $className = '蜀国';
                break;
            case 3:
                $className = '吴国';
                break;
        }
        $insert = mysqli_query($link, "insert into student(name,age,classId,className) value('$name','$age','$classID','$className')");
        if (!$insert) {
            echo "数据插入失败" . "<br/>";
            echo "<a href='./add.php'>请重新添加</a>";
        } else {
            echo "插入数据成功";
            echo "<a href='./index.php'>返回</a>";
        }
    } else {
        echo "数据不完整,添加失败!<br/>";
        echo "<a href='./add.php'>重新添加</a>";
    }
}
