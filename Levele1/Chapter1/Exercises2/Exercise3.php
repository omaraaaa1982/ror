<?php
$cur=0;
$err=0;
echo "<center>";
switch($_POST["rq301"])
{
case "1": 	$err++;break;
case "2":	$cur++;break;	
default :	$err++;break;
}
switch($_POST["rq302"])
{
case "1": 	$err++;break;	
case "2":	$cur++;break;
default :	$err++;break;
}
switch($_POST["rq303"])
{
case "1": 	$cur++;break;	
case "2":	$err++;break;
default :	$err++;break;
}
		
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../../Style/st.css" />
<style >
h5 { background-color: blue;color: white;}
</style>
<title>تقرير التدريب الثالث</title>
</head>
<body style="background-color: #e495e4;">
<table class=ClTable><tr><td><center>
<form action="../Test3.html" method="post">
عددالصح=<?php echo $cur;?>
عددالخطاء=<?php echo $err;?>
<pre ><b>تستطيع الانتقال الى التدريب التالي<br>اذا كان عدد الصح اكثر من الخطاء</b></pre>


<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<?php
if($cur>$err)
{
?>
<table><tr><td>
<h5 >
يمكنك الانتقال الى التدريب التالي
</h5>
</td></tr></table>
<?php
}
else
{
?>
<table><tr><td>
<h5>
معذرتان لايمكنك الانتقال الى التدريب التالي
</h5>
</td></tr></table>
<?php
}
?>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<table><tr><td>
<div class=btn-group>
<?php
if($cur>$err)
{
?>
<input type="button" class=button value="السابق" onclick="document.location='Exercise3.html';">
<input type="submit" class=button value="التالي">
<?php
}
else
{
?>
<input type="button" class=button value="السابق" onclick="document.location='Exercise3.html';">
<?php
}
?>
</div >
</td></tr></table>
<!--zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->
<!--zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->

<!--zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->
<!--zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
اجابتك هي
<table>
<tr>
	<?php
	switch($_POST["rq301"])
	{
	case "1": ?> <td>خطاء</td><td>1</td>
	<?php break;
	case "2": ?> <td>صح</td><td>1</td>
	<?php break;
	default : ?> <td>خطاء</td><td>1</td>
	<?php break;}?>
</tr>
<tr>
	<?php switch($_POST["rq302"]) {
	case "1": ?> <td>خطاء</td><td>2</td>
	<?php break;	
	case "2": ?> <td>صح</td><td>2</td>
	<?php break;
	default : ?> <td>خطاء</td><td>2</td>
	<?php break;}?>
</tr>
<tr>
	<?php switch($_POST["rq303"]) {
	case "1": ?> <td>صح</td><td>3</td>
	<?php break;	
	case "2": ?> <td>خطاء</td><td>3</td>
	<?php break;
	default : ?> <td>خطاء</td><td>3</td>
	<?php break;}?>
</tr>
</table>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<table><tr><td>
<div class=btn-group>
<?php
if($cur>$err)
{
?>
<input type="button" class=button value="السابق" onclick="document.location='Exercise3.html';">
<input type="submit" class=button value="التالي">
<?php
}
else
{
?>
<input type="button" class=button value="السابق" onclick="document.location='Exercise3.html';">
<?php
}
?>
</div >
</td></tr></table>
</form>
<br>
<?php
if($cur>$err)
{
?>
<table><tr><td>
<h5 >
يمكنك الانتقال الى التدريب التالي
</h5>
</td></tr></table>
<?php
}
else
{
?>
<table><tr><td>
<h5>
معذرتان لايمكنك الانتقال الى التدريب التالي
</h5>
</td></tr></table>
<?php
}
?>
عددالصح=<?php echo $cur;?>
عددالخطاء=<?php echo $err;?>
<pre ><b>تستطيع الانتقال الى التالي<br>اذا كان عدد الصح اكثر من الخطاء</b></pre>
</center></td></tr></table>
</body>
</html>
<?php
echo "</center>";
?>