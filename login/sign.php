<?php
//连接数据库,常用参数是主机名、用户名和密码
$link = mysql_connect('localhost','root','root');
//判断是否连接成功
if(!$link)
{
die('连接失败'.mysql.error()); 
echo "连接数据库失败";
//连接成功返回资源标识符，失败返回false，mysql_error显示错误信息
}

//选择数据库,mysql_error()只在调试中使用，再部署项目时就不要了，不然会泄露数据库信息
mysql_select_db('test') or die('选择数据库失败'.mysql_error());
$result = mysql_query('select * from new');
//获取记录行的个数


$name=isset($_POST['name'])?$_POST['name']:' ';
$age=isset($_POST['age'])?$_POST['age']:' ';
$content=isset($_POST['content'])?$_POST['content']:' ';
//mysql_query()可以设置字符集和执行SQL语句
mysql_query('set names utf-8');
$sql = "insert into new(NAME,AGE,CONTENT) values('{$name}',{$age},'{$content}')";
$result = mysql_query($sql);  //执行sql返回结果集

//处理结果集，insert属于DML，会对表的记录有影响
if($result && mysql_affected_rows() > 0)
{
//mysql_insert_id()返回最后一条新纪录的auto_increment值
echo '插入数据成功'.mysql_insert_id().'<br/>';
}
else
{
echo '插入数据失败，错误号:'.mysql_errno().'错误信息：'.mysql_error().'<br/>';
}

//关闭连接
mysql_close($link);
?>
<meta charset="utf-8">