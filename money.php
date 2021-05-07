<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="banklogin"; // Database name
$tbl_name="moneytransfer"; // Table name

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password", "$db_name");
if (!$con)
{
 die("cannot connect");
}
//mysqli_select_db("$db_name")or die("cannot select DB");

// Get values from form

$accountnumber=$_POST['accountnumber'];
$accounttype=$_POST['accounttype'];
$beneficieryname=$_POST['beneficieryname'];	
$amount=$_POST['amount'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(accountnumber,accounttype,beneficieryname,amount)VALUES('$accountnumber','$accounttype','$beneficieryname','$amount')";
$result=mysqli_query($con,$sql);

// if successfully insert data into database, displays //message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='transacted.html'>click here to continue</a>";
}

else {
echo "Successful";
echo "<BR>";
echo "<a href='transacted.html'>click here to continue</a>";;
}
?>


