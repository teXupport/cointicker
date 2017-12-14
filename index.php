<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Custom Crypto Monitoring (cryptocompare.com API)</title>
		<link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="./res/css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="./res/js/rawCoins.js"></script>
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="./res/js/init.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<div id = "controls">
			<table class="table-responsive">
				<tr>
					<td><button id="font-size-inc">Bigger Text</button></td>
					<td><button id="font-size-dec">Smaller Text</button></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3"><label for="chart-control">Enable charts (beta)?</label> <input id="chart-control" type="checkbox" /></td>
				</tr>
				<tr>
					<td colspan="2"><input id="sym-text" /></td>
					<td><button id="add-sym">Add Symbol</button></td>
				</tr>
			</table>
		</div>
		<span class="separator"> </span>
		<div id="ticker">
			<table id="coins-tb" class="table-responsive table-bordered">
				<tr>
					<th>Symbol</th>
					<th>Name</th>
					<th>Price (USD)</th>
					<th>Change</th>
					<th>24h Change</th>
					<th>Updated</th>
					<th>Hide</th>
				</tr>
			</table>
		</div>
	</body>
	<style>
		body {
			background-color: rgb(180, 180, 180);
		}
	</style>
	<script src="./res/js/ticker.js"></script>
</html>