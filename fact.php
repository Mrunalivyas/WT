<!DOCTYPE html>
<html>
<head>
    <title>WEB Page</title>
</head>
<body>
<form method="post">
    Enter the number: <input type="text" name="text1"><br>
	Enter the number serach : <input type="text" name="text2">

    <input type="submit">
</form>
<?php
if ($_POST) 
{
	$n = $_POST['text1'];
    	echo "Entered number:  " . $n . "<br>";
	$str = $_POST['text2'];
	echo "Entered number serach:  " . $str . "<br>";
$count=0;

	for($i="0";$i<=strlen($n);$i++)
	{
		if(substr($n,$i,1)==$str)
		{
			$count=$count+1;
		}
	}
	echo "the character $str appens $count input string it $n" ;

  }
?>
</body>
</html>
	