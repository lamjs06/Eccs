<?PHP
// file hubungan
// host name= local host  
// sql username = root
// nama database= nurlshop
$host='localhost';
$username='root';
$password='';
$database='Eccs';
$con=mysqli_connect($host,$username,$password,$database);
if(!$con){
    die ("connection failed:".mysqli_connect_error());
}
?>