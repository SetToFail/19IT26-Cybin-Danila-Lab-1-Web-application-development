<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cybin Danila, Laboratory work 1</title>
</head>
<body>
	<script type="text/javascript">
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
		var x = Number(prompt("введите x"));
		var n = Number(prompt("введите N"));
		var summ = 0;
		for(let i = 1; i <= n; i++)
			summ += ((-1)**i)*(x**(2*i))/(sigma((2*i)+1));
		console.log(summ.toFixed(4));
	</script>
</body>
</html>