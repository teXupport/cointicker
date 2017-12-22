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
	<div class="jumbotron text-center" id="header">
		<div class="row">
			<div class="col-sm-1"><input id="sym-text" placeholder="Search Symbol"/></div>
			<div class="col-sm-1"><button id="add-sym">Add Symbol</button></div>
			<div class="col-sm-8">
			<h1>Cointicker</h1>
			<p>All the Cryptocurrencies in one convenient location.</p>
			<label for="chart-control">Enable charts (beta)?</label> <input id="chart-control" type="checkbox" />
			</div>
		</div>

		<br>
		<ul class="nav nav-tabs">
			<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#home">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#tables">Data Tables</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#charts">Historical Charts</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#pools">Cointicker Pools</a>
			</li>
		</ul>
	</div>
	<div class="tab-content">
	<div class="tab-pane active container" id="home">Home</div>
	<div class="tab-pane container" id="tables">
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
				<th>Market Cap (BTC)</th>
				<th>Updated</th>
				<th>Hide</th>
			</tr>
		</table>
	</div>
	</div>
	<div class="tab-pane container" id="charts">Charts</div>
	<div id="chart-container"></div>
	<div class="tab-pane container" id="pools">Pools</div>
	</body>
	<script src="./res/js/ticker.js"></script>
</html>