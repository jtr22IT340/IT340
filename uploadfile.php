<?php
#include ("testing.txt");

$ftp_server="192.168.122.1";
$ftp_username=$_POST["user"];
$ftp_userpass=$_POST["pass"];
$file= $_POST["file"];
$remote_file= "hi.txt";
// set up basic connection
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

echo "connected to ftp <br> " ;

// login with username and password
if (@ftp_login($ftp_conn, $ftp_username, $ftp_userpass))
  {
  echo "Login success.";
  }
else
  {
  echo "Login failed.";
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

