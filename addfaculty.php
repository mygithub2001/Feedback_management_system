<?php
include("configASL.php");
session_start();
$fc=$_POST['fc'];
	$sub=$_POST['sub'];
	$subc=$_POST['subc'];
	$cor=$_POST['cor'];
	$sem=$_POST['sem'];
    $u=mysqli_query($al,"insert into faculty(faculty_id,name,subject,subject_code,course,semester) values('$faculty_id','$fc','$sub','$subc','$cor','$sem')");
    
    print_r($_POST);
    ?>