<?php 

include("conect.php");

$id=$_REQUEST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$password=$_POST['password'];
$userType=$_POST['perfil'];

$query="UPDATE users SET username='$username', email='$email',phone='$phone',password='$password',perfil='$userType' WHERE id='$id'";
$answere = $conexion->query($query);

if ($answere){
    header ("Location:dashboard.php");
}else{
    echo "Ha ocurrido un error";
    echo $query;
}

?>