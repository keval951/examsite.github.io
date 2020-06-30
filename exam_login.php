<?php
if(isset($_POST["loginb"])){
$id=$_POST["id"];
$pass=$_POST["pass"];
if ($id=='bhartikawadkar951' && $pass=='bharti'){
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