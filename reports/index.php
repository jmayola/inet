<html>
<?php
include "import.php";
?>
	<script src='../tailwind.html'></script>
<head>
	<title>testing crud</title>
</head>
<body>
	<form method="POST" action="export.php" enctype="multipart/form-data" class="bg-slate-600">
		<input type="submit" value="Ingresar" name="Export"/>
	</form>
	<?php
		get_all_records();
	?>
</body>
</html>
