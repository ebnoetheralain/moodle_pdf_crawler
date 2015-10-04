<?php


$con = mysqli_connect("","root");
$sql = "CREATE DATABASE IF NOT EXISTS url";
 mysqli_query($con, $sql);
mysqli_select_db($con, "url");
$sql = "CREATE TABLE IF NOT EXISTS links(
		id int(11) NOT NULL AUTO_INCREMENT,
		text varchar(1000) NOT NULL,
		PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
mysqli_query($con, $sql);


$url = "YourWebsite";
$input = @file_get_contents($url) or die("Could not access file: $url");
  $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
  if(preg_match_all("/$regexp/siU", $input, $matches, PREG_SET_ORDER)) {
    foreach($matches as $match) {

    	if)(
    	mysqli_query($con, "insert into links (text)"
        . " values ('" . $match[2] . "')");
      echo $match[2]." ";
      echo "<br/>";
    }
  }

mysqli_close($con);
?>
