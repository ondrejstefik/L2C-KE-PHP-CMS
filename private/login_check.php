<?php include_once dirname(__FILE__).'/../framework/helpers.php';
if(!empty($_POST)){
    if(!empty($_POST['email']) && !empty($_POST['password']) ) {
$data= db_query("SELECT * FROM Users WHERE Email = '".$_POST ['email']."'");
if($data!=false){
$user=mysqli_fetch_object($data);
if($user->password==$_POST['password']){
echo $user->Email;
}
}
    }
} 

?>