
  <?php
$con = mysql_connect("localhost", "root", "root");
if (!$con)
  {
  die('连接失败: ' . mysql_error());
  }
else
{
mysql_query("SET NAMES UTF8");
mysql_query("set character_set_client=utf8"); 
mysql_query("set character_set_results=utf8");
$db_selected = mysql_select_db("test",$con);
$sql = "SELECT * from new";
$result = mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
  echo "编号：".$row[0]."";
  echo "姓名: ".$row[1]."";
  echo "<br>";
}
mysql_close($con);
}
?>
<meta charset="utf-8">