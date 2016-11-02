<?php
include ("readme.txt");
$ftp_server="192.168.122.1";
$ftp_username="justin";
$ftp_userpass="";
$file= $_GET["file"];//tobe uploaded
$remote_file= "readme.txt";

// set up basic connection
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

echo "success <br> " ;


// login with username and password
if (@ftp_login($ftp_conn, $ftp_username, $ftp_userpass))
  {
  echo "Connection established.";
  }
else
  {
  echo "Couldn't establish a connection.";
  }

// upload a file

if(ftp_put($ftp_conn, $remote_file, $file, FTP_ASCII)){
	echo "successfully uploaded $file\n";
}else{
	echo" There was a problem while uploading $file\n";
}

// close the connection
ftp_close($ftp_conn);
?>

