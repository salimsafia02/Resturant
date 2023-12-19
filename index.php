<?php
 
 $email=$_REQUEST['email'] ;
 $password=$_REQUEST['password'] ;

if(isset($_POST['btn'])){

$host="localhost" ;
$user="root" ;
$bassword="" ;
$db="food" ; 


$conn=mysqli_connect ($host,$user,$password,$db) ;

$insert="insert into users info values('$email','$password')" ;

mysqli_query($conn,$insert) ;

if($conn){
 echo("<h2 style='color:green;' >your Registration Is Done!</h2>") ;
}
else
     echo("<h2 style='color:red;' >your Registration Is Faild!</h2>") ;
}

?>
