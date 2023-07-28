
<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$name =$_POST['user'];
$pass =$_POST['password'];

$query =" SELECT*FROM logIn  WHERE name='$name' ";

$result=mysqli_query($con,$query);
$resultCheck = mysqli_num_rows($result);


if($resultCheck==1){
   echo "username Already Taken";

}else{
  $reg ="insert into logIn (name,password) values ('$name','$pass')";
  mysqli_query($con,$reg);
  echo "<script type='text/javascript'> alert('تم التسجيل ') </script>";
}
echo '<meta http-equiv="refresh" content="0; url=home.php" />'

 ?>