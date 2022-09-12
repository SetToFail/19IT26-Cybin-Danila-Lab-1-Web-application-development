<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cybin Danila, Laboratory work 2</title>
</head>
<body>
	<input type="text" id="x" value="Ввод x">
	<br><br>
	<input type="text" id="n" value="Ввод n">
	<br><br>
	<input type="submit" onclick="summ()">
	<script type="text/javascript">
		function summ()
		{
			var n = Number(document.getElementById("n").value);
			var x = Number(document.getElementById("x").value);
			var summ = 0;
			for(let i = 1; i <= n; i++)
				summ += ((-1)**i)*(x**(2*i))/(sigma((2*i)+1));
			console.log(summ.toFixed(10));
		}
		function sigma(x) {
			if(x == 0) {
				return 1;
			}
			if(x < 0 ) {
				return undefined;
			}
			for(var i = x; --i; ) {
				x *= i;
			}
			return x;
		}
	</script>
</body>
</html>
