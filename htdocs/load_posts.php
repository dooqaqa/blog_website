<?php
header('Content-Type: text/html; charset=UTF-8');
header("Cache-Control: no-cache, must-revalidate");

require("key.php");
define(DB_TABLENAME, 'posts');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');
$index=$_POST["q"];
$time=$_POST["qq"];
$sql="";
$max_posts = 20;
//echo "index:" . $index . "time:" . $time;
$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());
if (!$dblink) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DATABASENAME, $dblink);
//echo "limit:" . $blogs_per_time;
if (null == $time or "" == $time) {
	$sql = sprintf("select * from %s order by post_time limit %d", DB_TABLENAME, $max_posts);
} else {
	$sql = sprintf("select * from %s where post_time < '%s' order by post_time limit %d", DB_TABLENAME, $time, $max_posts);
}
//echo $sql;
$result = mysql_query($sql);
echo_json($result, $max_posts);
mysql_close($dblink);

function echo_xml($sql_result, $max_post)
{
	$file_found = 0;
	echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
	echo "<posts>";
	while($row = mysql_fetch_array($sql_result) and $file_found < $max_posts) {
		$body = "";
		if ($body = file_get_contents("posts/" . $row['file_name'])) {
			echo "<post>";
			echo "<topic>";
			echo $row['topic'];
			echo "</topic>";
			echo "<time>";
			echo $row['post_time'];
			echo "</time>";
			echo "<cat>";
			echo $row['category'];
			echo "</cat>";
			echo "<body>";
			echo $body;
			echo "</body>";
			echo "</post>";
			$file_found++;
		} else {
			echo "bad2";
		}
	}
	echo "</posts>";
}


function echo_json($sql_result, $max_posts)
{
	$file_found = 0;
	echo "{\"posts\":[";
	while($row = mysql_fetch_array($sql_result) and $file_found < $max_posts) {
		$body = "";
		if ($body = file_get_contents("posts/" . $row['file_name'])) {
			if (0 < $file_found) {
				echo ",";
			}
			echo "{\"topic\":\"";
			echo $row['topic'];
			echo "\",";
			echo "\"time\":\"";
			echo $row['post_time'];
			echo "\",";
			echo "\"cat\":\"";
			echo $row['category'];
			echo "\",";
			echo "\"body\":\"";
			echo $body;
			echo "\"}";
			$file_found++;
		} else {
			echo "bad2";
		}
	}
	echo "],\"count\":\"" . $file_found . "\"}";
}
?>