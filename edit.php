<?php
if (empty($_POST)) {
    if (empty($_GET)) {
        echo "编辑的参数不存在";
        echo "<a href='./index.php'>返回</a>";
        exit();
    } else {
        if (empty($_GET['id'])) {
            echo "编辑参数不存在，请返回";
            echo "<a href='./index.php'>返回</a>";
            exit();
        } else {
            $link = mysqli_connect('localhost', 'root', '12345', 'wdnmd');
            if (!$link) {
                echo "数据库连接失败";
                exit;
            }
            $id = $_GET['id'];
            $sql = mysqli_query($link, "select * from student where id=$id");
            $dataClass = array();
            while ($rowData = mysqli_fetch_assoc($sql)) {
                $dataClass[] = $rowData;
            }
            require "./edit.html";
        }
    }
} else {
    $link = mysqli_connect('localhost', 'root', '12345', 'wdnmd');
    if (!$link) {
        echo "数据库连接失败";
        exit;
    }
    $id = $_POST['id'];
    $name = $_POST["username"];
    $age = $_POST["age"];
    $classId = $_POST["class"];
    switch ($classId) {
        case 1:
            $classname = '魏国';
            break;
        case 2:
            $classname = '蜀国';
            break;
        case 3:
            $classname = '吴国';
            break;
    }
    if (isset($id) && isset($name) && isset($age) && isset($classId) && isset($classname)) {
        $sql = mysqli_query($link, "update student set name='$name',age='$age',classId='$classId',className='$classname' where id=$id");
        if (!$sql) {
            echo "数据修改失败<br/>";
            echo "<a href='./edit.php?id=$id>重新修改</a>'>";
        } else {
            echo "数据修改成功<br/>";
            echo "<a href='./index.php'>返回</a>";
        }
    } else {
        echo "数据不完整，修改失败<br/>";
        header("Refresh:3;usr=index.php");
    }
}
