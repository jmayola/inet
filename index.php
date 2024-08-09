<html>
<head>
	<title>testing</title>
	<script src='tailwind.html'></script>
</head>
<body class="w-screen h-screen grid place-content-center">
	<p class="p-5 bg-red-600 m-5">hola mami desde html y php con tailwindcss</p>
	<?php
		include("database/connection.php");
		$query = mysqli_query($connection,"SELECT * FROM users");
		$hello = "hola";
		#foreach($query as $res){
		#	echo $res["username"];
		#}
		foreach($query as $item => $value){
			echo "<h1>{$value['username']}</h1>\n";
		}
?>
<?php
#		include $_GET['file']. 'php'
?>
<p>hola mami desde PRacticas/php/test/test</p>
</body>
</html>
