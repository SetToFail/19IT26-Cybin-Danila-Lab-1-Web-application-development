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
	<br>
	<input type="submit" onclick="arr()" value="Добавить элемент">
	<input type="submit" onclick="result()" value="Результат">
	<script type="text/javascript">
		var array = [];
		var arr;
		function arr()
		{
			var arr = Number(document.getElementById("arr").value);
			array.push(arr);
		}
		function result()
		{
			for (var i = array.length - 1; i >= 0; i--) 
			{
				if (isNaN(array[i])) 
				{
					array.splice(i, 1);
				}
			}
			var min = Math.min(...array); 
			var max = Math.max(...array);
			var summ = Number(min) + Number(max);
			console.log(summ);
		}
	</script>
</body>
</html>
