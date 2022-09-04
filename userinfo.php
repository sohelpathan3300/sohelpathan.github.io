<?php
$con = mysqli_connect('localhost','root');

if($con){
     echo "conenction successful";
}else{
     echo "no conenction";
}
mysqli_select_db(' userinfo');
$email=$_POST['email']

?>