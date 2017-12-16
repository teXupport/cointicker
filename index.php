<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Custom Crypto Monitoring (cryptocompare.com API)</title>
		<!--Meta Tags-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--Styles-->
		<link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="./res/css/main.css">
		<!--Scripts-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="./res/js/rawCoins.js"></script>
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="./res/js/init.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
	<div class="page-header">
		<div class="jumbotron text-center">
			<table class="table-responsive">
				</tr>
				<tr>	
					<td>
					<button id="font-size-inc"><img width="24" height="24" src="res/includes/images/icons/zoom-in-icon.png"></button>
					<button id="font-size-dec"><img width="24" height="24" src="res/includes/images/icons/zoom-out-icon.png"></button>
					</td>
					<td></td>
					<td colspan="2"><input id="sym-text" /></td>
					<td><button id="add-sym">Add Symbol</button></td>
			</tr>
			<tr>
				<td colspan="3"><label for="chart-control">Enable charts (beta)?</label> <input id="chart-control" type="checkbox" /></td>
			</tr>
		</table>
		<h1>Cointicker</h1>
		<p>All the Cryptocurrencies in one convenient location.</p>
	</div>
	</div>
	<div class="featured1strow">
	<h3>Featured Currencies</h3>
	</div>
	<div class="featured2ndrow">
	<!--I was thinking we could display some of the major coins here, but I can't figure out how to pull the API data into the boxes. Layout isn't done but I was intending to show the symbol, name, price/usd below to the bottom right corner, a % change over 24hr (or 7 days?) in the top right of the box.</-->
		<div class="featured-coin">
		<h2>BTC</h2>
		</div>
		<div class="featured-coin">
		<h2>ETH</h2>
		</div>
		<div class="featured-coin">
		<h2>LTC</h2>
		</div>
		<div class="featured-coin">
		<h2>XMR</h2>
		</div>
		<div class="featured-coin">
		<h2>XRP</h2>
		</div>
		<div class="featured-coin">
		<h2>ZEC</h2>
		</div>
	</div>
	<div id="ticker">
		<table id="coins-tb" class="table-responsivechart table-bordered">
			<tr>
				<th>Symbol</th>
				<th>Name</th>
				<th>Price (USD)</th>
				<th>Change (USD)</th>
				<th>24h Change (USD)</th>
				<th>Price (BTC)</th>
				<th>Change (BTC)</th>
				<th>24h Change (BTC)</th>
				<th>24h Change (%)</th>
				<th>Updated</th>
				<th>Hide</th>
			</tr>
		</table>
	</div>
	</body>
	<script src="./res/js/ticker.js"></script>
</html>