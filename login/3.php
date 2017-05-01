
<?php
$con = mysql_connect("localhost", "root", "root");
if (!$con)
  {
  die('连接失败: ' . mysql_error());
  }
else
{
// mysql_query("SET NAMES UTF8");
// mysql_query("set character_set_client=utf8"); 
// mysql_query("set character_set_results=utf8");
$db_selected = mysql_select_db("test",$con);
$sql = "SELECT * from new";
$result = mysql_query($sql,$con);
$row = mysql_fetch_object($result);
while ($row = mysql_fetch_object($result))
 {
  echo "编号：".$row->Id .";";
 echo "姓名：".$row->NAME .";";
 echo "age:".$row->AGE.";";
 echo "content:".$row->CONTENT.";";
 }
mysql_close($con);
}
?>
<meta charset="utf-8">