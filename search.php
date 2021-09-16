<?php
if (empty($_POST['search'])) {
    echo "请输入关键词";
    header('Refresh:3;url=index.php');
} else {
    $link = mysqli_connect('localhost', 'root', '12345', 'wdnmd');
    if (!$link) {
        echo "连接数据库失败";
        exit;
    }
    $value=trim($_POST['search']);
    $query = mysqli_query($link, "select * from student where name like '%$value%' or id like '%$value%' or age like '%$value%' or className like '%$value%';");
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    require "./show.html";
}
