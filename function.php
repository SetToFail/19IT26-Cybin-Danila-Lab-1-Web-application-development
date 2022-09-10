<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function</title>
</head>
<body>
<script type="text/javascript">
	function f(x) {
			var sum = Math.sin(x)/x;	
	}
	var x = Number(prompt("Введите x"));
	f();	
	console.log(sum.toFixed(5));
</script>
</body>
</html>