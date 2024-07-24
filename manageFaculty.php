<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];

if(!empty($_POST))
{
	$fc=$_POST['fc'];
	$sub=$_POST['sub'];
	$subc=$_POST['subc'];
	$cor=$_POST['cor'];
	$sem=$_POST['sem'];
	$faculty_id = uniqid();
	$u=mysqli_query($al,"insert into faculty(faculty_id,name,s1,s2) values('$faculty_id','$fc','$sub','$subc','$cor','$sem')");
	if($u==true)
	{
		?>
        <script type="application/javascript">
		alert('Successfully added');
		</script>
        <?php }
}
		
?>
<!doctype html>
<html><!-- Designed & Developed by Ashish Labade (Tech Vegan) www.ashishvegan.com | Not for Commercial Use-->
<head>
<meta charset="utf-8">
<title>Student Feedback System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="topHeader">
	FEEDBACK MANAGEMENT SYSTEM<br />
    <span class="tag">STUDENT FEEDBACK SYSTEM</span>
</div>
<br>
<br>
<br>
<br>

<div id="content" align="center">
<br>
<br>
<span class="SubHead">Add Faculty</span>
<br>
<br>
<form method="post" action="addfaclty.php?aid=<?php echo $_POST['fc']; ?>" >


<div id="table">
	<div class="tr">
		<div class="td">
        	<label>Faculty : </label>
        </div>
        <div class="td">
			<input type="text" name="fc" size="25" required placeholder="Enter Faculty Name" />
        </div>
    </div>
    <div class="tr">
		<div class="td">
        	<label>Subject : </label>
        </div>
        <div class="td">
			<input type="text" name="sub" size="25" required placeholder="Enter Subject" />
        </div>
    </div>
    
    <div class="tr">
		<div class="td">
        	<label>Subject Code : </label>
        </div>
        <div class="td">
			<input type="text" name="subc" size="25" required placeholder="Enter Subject code" />
        </div>
    </div>
    <div class="tr">
		<div class="td">
        	<label>Course : </label>
        </div>
        <div class="td">
			<input type="text" name="cor" size="25" required placeholder="Enter Course" />
        </div>
    </div>
    <div class="tr">
		<div class="td">
        	<label>Semester : </label>
        </div>
        <div class="td">
			<input type="text" name="sem" size="25" required placeholder="Enter Semester" />
        </div>
    </div>
</div>
		
        <div class="tdd">
        	<input type="submit" value="ADD FACULTY" />
        </div>
    
<br>
<br>

    
    
    
    <span class="SubHead">Manage Faculty</span>
    <br>
<br>

	<table border="0" cellpadding="3" cellspacing="3">
    <tr style="font-weight:bold;">
    <td>Sr. No.</td>
    <td>Name</td>
    <td>Subject </td>
    <td>Subject Code</td>
    <td>Course</td>
    <td>semester</td>
    <td>Delete</td>
    <td>Edit</td>
    
    </tr>
    <?php
	$sr=1;
	$h=mysqli_query($al,"select * from faculty");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
        <td><?php echo $sr;$sr++;?></td>
        <td><?php echo $j['name'];?></td>
        <td><?php echo $j['subject'];?></td>
        <td><?php echo $j['subject_code'];?></td>
        <td><?php echo $j['course'];?></td>
        <td><?php echo $j['semester'];?></td>
        <td align="center"><a href="delete.php?del=<?php echo $j['id'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:rgba(255,0,4,1.00);">x</a></td>
        <td> <button type="button" class="btn btn-primary">Edit</button>
        <a href="delete.php?del=<?php echo $user_id ?>"  onclick="return confirm('Are you sure?')">
        </tr>
     <?php } ?>
     </table>
     <br>

<input type="button" onClick="window.location='home.php'" value="BACK">
<br>
<br>
</div>
</form>


<br>
<br>
<br>

<br>
<br>

</div>
</body>
</html>