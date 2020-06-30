<?php
if(isset($_POST["loginb"])){
$id=$_POST["id"];
$pass=$_POST["pass"];
if ($id=='keval159' && $pass=='keval'){
	header("Location:exam_paper.html");
}
else{
	header("Location:exam_login.html");
}
}
else {
	header("Location:exam_login.html");
}
?>
