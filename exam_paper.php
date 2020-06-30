<?php
header("Location:exam_complet.html");
$spf=fopen("student_paper.txt","a");
$sn=$_POST["student_name"];
$sub=$_POST["sub"];
$less=$_POST["less"];
$class=$_POST["class"];
$ans1=$_POST["q1"];
$ans2=$_POST["q2"];
$ans3=$_POST["q3"];
//str for txt file
$sinfo="Student Data:";
$pa="Paper ans is here:";
$name="Student Name:≈> ";
$subj="Subject:≈> ";
$lessn="Chapter:≈> ";
$std="Class:≈> ";
//text file edit
fwrite($spf,$sinfo);
fwrite($spf,"\r\n\n");
fwrite($spf,$name);
fwrite($spf,$sn);
fwrite($spf,"\r\n");
fwrite($spf,$subj);
fwrite($spf,$sub);
fwrite($spf,"\r\n");
fwrite($spf,$lessn);
fwrite($spf,$less);
fwrite($spf,"\r\n");
fwrite($spf,$std);
fwrite($spf,$class);
fwrite($spf,"\r\n\n");
fwrite($spf,$pa);
fwrite($spf,"\r\n\n");
fwrite($spf,$ans1);
fwrite($spf,"\r\n");
fwrite($spf,$ans2);
fwrite($spf,"\r\n");
fwrite($spf,$ans3);
fwrite($spf,"\r\n\n\n");
fclose($spf);
?>