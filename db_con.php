<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '123456';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功<br />';
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");

$sname = $_POST['name'];
$smember = $_POST['member'];

$sql = "INSERT INTO people ".
    "(sname,smember) ".
    "VALUES ".
    "('$sname','$smember')";



mysqli_select_db( $conn, 'people' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>