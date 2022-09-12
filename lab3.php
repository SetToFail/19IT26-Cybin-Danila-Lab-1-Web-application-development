<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cybin Danila, Laboratory work 3</title>
</head>
<body>
	<input type="text" id="arr" value="Добавление в массив">
	<br>
	<input type="submit" onclick="arr()">
	<script type="text/javascript">
		var array = [];
		function arr()
		{
			var arr = Number(document.getElementById("arr").value);
			array.push(arr);
			var min = Math.min(...array); 
			var max = Math.max(...array);
			var summ = min + max;
			console.log(summ);
			console.log(array);
		}
	</script>
</body>
</html>