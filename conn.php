<?php
error_reporting(E_ALL & ~E_DEPRECATED);
//设置字符集
header('Content-Type: text/html; charset=utf8');
//连接数据库
mysql_query("set names utf8");//设置字符集编码
$link = mysql_connect("localhost","root","");
if(!$link){
echo '<Script Language="JavaScript">
alert("还没和云连接");
</Script>';
exit(-1);
}
//选择一个数据库作为默认数据库
mysql_select_db("news",$link);
$sql = "select * from news_rxxz";
$res=mysql_query($sql);
$row=mysql_fetch_row($res);
var_dump($row);
echo $row[1];
//.$row[1].$row[2];
echo "sddsd";
/*//执行sql插入语句
$sql = "INSERT INTO zh VALUES (NULL,'王杰','123456')";
$cr = mysql_query($sql);
//判断是否插入成功
if(!$cr){
echo "数据插入失败。<br>";
}else{
echo "数据插入成功。<br>";
}
//执行sql查询语句
$sql = "select * from zh";
$cr = mysql_query($sql);
//得到返回的结果集,并循环输出
echo "数据展示：<br><br><br>";
while($a = mysql_fetch_row($cr)){
echo "{$a[0]}——{$a[1]}——{$a[2]}<br>";
} */
//关闭数据库连接
?>