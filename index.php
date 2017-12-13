<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Custom Crypto Monitoring (cryptocompare.com API)</title>
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
					<th>24h Change</th>
					<th>Updated</th>
				</tr>
				<tr id="BTC"></tr>
				<tr id="ETH"></tr>
				<tr id="LTC"></tr>
			</table>
		</div>
	</body>
	<style>
		body {
			background-color: rgb(180, 180, 180);
		}
	</style>
	<script>
		reloadTicker = function(data) {
			data = data.USD
			if(data) {
				symbol = data.FROMSYMBOL;
				prev = parseFloat($('#'+symbol+'-price').text());
				cur = data.PRICE;
				change = " ";
				if(cur > prev) {
					change = "+"+(cur-prev).toFixed(2);
				} else if(cur < prev) {
					change = "-"+(prev-cur).toFixed(2);
				}
				
				//fill table row
				$('#'+symbol).html(
					"<td id='"+symbol+"-symbol'>"+symbol+"</td>"+
					"<td id='"+symbol+"-name'>"+data.TOSYMBOL+"</td>"+
					"<td id='"+symbol+"-price'>"+data.PRICE+"</td>"+
					"<td id='"+symbol+"-change'>"+change+"</td>"+
					"<td id='"+symbol+"-24h-change'>"+parseFloat(data.CHANGE24HOUR).toFixed(2)+"</td>"+
					"<td id='"+symbol+"-update'>"+(new Date()).toLocaleTimeString()+"</td>"
				)
				
				//process colors
				if(cur > prev) {
					//$('#'+symbol+'-price').css('color', 'lawngreen');
					$('#'+symbol+'-change').css('color', 'lawngreen');
				} else if(cur < prev) {
					//$('#'+symbol+'-price').css('color', 'crimson');
					$('#'+symbol+'-change').css('color', 'crimson');
				} else {
					//$('#'+symbol+'-price').css('color', 'black');
					$('#'+symbol+'-change').css('color', 'black');
				}
			}
			return;
		}
		
		refreshCoins = function() {
			if(1) {
				$.get("https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,LTC&tsyms=USD",
					function(data) {
						$.each(data.RAW, function(index, value) {
							reloadTicker(value);
						});
					},
					"json"
				);
			} else {
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
			}
			
			return;
		}
		
		$(function() {
			$('#coins-tb').css('font-size', '14px');
			refreshCoins();
			setInterval(refreshCoins, 5000);
			
			//attach buttons
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
