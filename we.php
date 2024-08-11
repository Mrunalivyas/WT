
<htm>
<head>
    <title>WEB Page</title>
    
</head>

<body>
<?php
$user=array(
 array(
	"name"=>"Mru",
	"age"=>30,
	"email"=>"patilmru631@gmail.com",
	"city"=>"Dhule",
),
array(
	"name"=>"kitu",
	"age"=>31,
	"email"=>"patilkitu631@gmail.com", 
	"city"=>"nashik",
),
array(
	"name"=>"bitu",
	"age"=>37,
	"email"=>"patilbitu631@gmail.com",
	"city"=>"shirpur",
	),
);
echo "User information:";
echo "<br>";

foreach($user as $value)
{
	echo "Name :" .$value['name']."<br>";
	echo "age :" .$value['age']."<br>";
	echo "email :" .$value['email']."<br>";
	echo "city :" .$value['city']."<br>";
	echo "---------------------<br><br>";

}
?>
</body>
</html>

