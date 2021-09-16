<?php
$conn = mysqli_connect('localhost', 'root', '12345', 'wdnmd');
if (!$conn) {
  echo '连接失败,请检查您的配置';
  exit;
}
$query = mysqli_query($conn, 'select * from student');
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
  $data[] = $row;
}
require("./show.html");
