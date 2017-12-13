<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Custom Crypto Monitoring (coinmarketcap.com API)</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="ticker">
			<button id="font-size-inc">Bigger Text</button>
			<button id="font-size-dec">Smaller Text</button>
			<table id="coins-tb" border="1px black">
				<tr>
					<th>Symbol</th>
					<th>Name</th>
					<th>Price</th>
					<th>Change</th>
					<th>1h Change</th>
					<th>Updated</th>
				</tr>
				<tr id="BTC"></tr>
				<tr id="ETH"></tr>
				<tr id="LTC"></tr>
			</table>
		</div>
	</body>
	<script>
		reloadTicker = function(data) {
			if(data) {
				symbol = data[0].symbol;
				prev = parseFloat($('#'+symbol+'-price').text());
				cur = parseFloat(data[0].price_usd);
				change = "+0.00";
				if(cur > prev) {
					change = "+"+(cur-prev).toFixed(2);
					$('#'+symbol+'-price').css('color', 'green');
					$('#'+symbol+'-change').css('color', 'green');
				} else if(cur < prev) {
					change = "-"+(prev-cur).toFixed(2);
					$('#'+symbol+'-price').css('color', 'red');
					$('#'+symbol+'-change').css('color', 'red');
				} else {
					$('#'+symbol+'-price').css('color', 'black');
					$('#'+symbol+'-change').css('color', 'black');
				}
				
				$('#'+symbol).html(
					"<td id='"+symbol+"-symbol'>"+symbol+"</td>"+
					"<td id='"+symbol+"-name'>"+data[0].name+"</td>"+
					"<td id='"+symbol+"-price'>"+data[0].price_usd+"</td>"+
					"<td id='"+symbol+"-change'>"+change+"</td>"+
					"<td id='"+symbol+"-1h-change'>"+parseFloat(data[0].percent_change_1h).toFixed(2)+"</td>"+
					"<td id='"+symbol+"-update'>"+(new Date()).toLocaleTimeString()+"</td>"
				)
			}
			return;
		}
		
		refreshCoins = function() {
			//BTC - Bitcoin
			$.get("https://api.coinmarketcap.com/v1/ticker/bitcoin/",
				function(data) {reloadTicker(data);},
				"json"
			);
			
			//ETH - Ethereum
			$.get("https://api.coinmarketcap.com/v1/ticker/ethereum/",
				function(data) {reloadTicker(data);},
				"json"
			);
			
			//LTC - Litecoin
			$.get("https://api.coinmarketcap.com/v1/ticker/litecoin/",
				function(data) {reloadTicker(data);},
				"json"
			);
			
			return;
		}
		
		$(function() {
			$('#coins-tb').css('font-size', '30px');
			refreshCoins();
			setInterval(refreshCoins, 3*60000/10);
			
			$('#font-size-inc').click(function(){
				sz = parseInt($('#coins-tb').css('font-size').substring(0,2));
				$('#coins-tb').css('font-size', ''+(sz+2)+'px');
			});
			$('#font-size-dec').click(function(){
				sz = parseInt($('#coins-tb').css('font-size').substring(0,2));
				$('#coins-tb').css('font-size', ''+(sz-2)+'px');
			});
		});
	</script>
</html>