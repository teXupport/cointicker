symLib = [];
nameLib = [];
imageLib = [];
chart = [];

updateSymbols = function(fsym) {
	var temp = "";
	$.each(fsym, function(index, value){
		if(index == 0) {
			temp = value;
		} else {
			temp = temp+","+value;
		}
	});
	
	return temp;
}

fsym = ["BTC","ETH","LTC"]
fsymStr = updateSymbols(fsym);

function drawChart() {
	var points = [];
	$.each(fsym, function(i, symbol) {
		points[symbol] = [];
		$.get("https://min-api.cryptocompare.com/data/histoday?aggregate=1&e=CCCAGG&extraParams=CryptoCompare&fsym="+symbol+"&limit=365&tryConversion=false&tsym=USD",
			function(data) {
				$.each(data.Data, function(x, value) {
					points[symbol][x] = [];
					points[symbol][x][0] = (new Date(parseInt(value.time))).toLocaleTimeString();
					points[symbol][x][1] = value.open;
					points[symbol][x][2] = value.low;
					points[symbol][x][3] = value.high;
					points[symbol][x][4] = value.close;
				});
				
				gTab = google.visualization.arrayToDataTable(points[symbol], true);
				chart[symbol] = new google.visualization.CandlestickChart(document.getElementById(symbol+'-24h-chart-div'));
				chart[symbol].draw(gTab, options);
			},
			"json"
		);
		
		options = {
			legend:'none'
		};
	});
}

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
		
		//show if hidden
		$('#'+symbol).show();
		
		//fill table row
		$('#'+symbol).html(
			"<td id='"+symbol+"-symbol'>"+
				"<a href='https://www.cryptocompare.com/coins/"+symbol+"/overview'><img class='icon' alt="+symbol+" src='https://www.cryptocompare.com"+imageLib[symbol]+"'></a>&nbsp;"+symbol+"</td>"+
			"<td id='"+symbol+"-name'>"+nameLib[symbol]+"</td>"+
			"<td id='"+symbol+"-price'>"+data.PRICE+"</td>"+
			"<td id='"+symbol+"-change'>"+change+"</td>"+
			"<td id='"+symbol+"-24h-change'>"+parseFloat(data.CHANGE24HOUR).toFixed(2)+"</td>"+
			"<td id='"+symbol+"-update'>"+(new Date()).toLocaleTimeString()+"</td>"+
			"<td id='"+symbol+"-hide'><button class='hider'>X</button></td>"
		)
		
		if(!$('#'+symbol+'-24h-chart-div').length) {
			$('#'+symbol).after("<div id='"+symbol+"-24h-chart-div' class='chart' style='display:none'></div>");
		}
		
		$('#'+symbol+'-hide').find('.hider').click(function() {
			$this = $(this);
			$this.parents('tr').html('');
			$this.parents('tr').hide();
			fsym.splice(parseInt(fsym.indexOf(symbol)), 1);
			fsymStr = updateSymbols(fsym);
			reboot();
		});
		
		//process colors
		if(cur > prev) {
			$('#'+symbol+'-change').css('color', 'lawngreen');
		} else if(cur < prev) {
			$('#'+symbol+'-change').css('color', 'crimson');
		} else {
			$('#'+symbol+'-change').css('color', 'black');
		}
	}
	return;
}

refreshCoins = function() {
	if(fsymStr.length >= 3) {
		$.get("https://min-api.cryptocompare.com/data/pricemultifull?fsyms="+fsymStr+"&tsyms=USD",
			function(data) {
				$.each(data.RAW, function(index, value) {
					reloadTicker(value);
				});
			},
			"json"
		);
	} else {
		console.log("No symbols selected.");
	}
	
	return;
}

$(function() {
	$('#coins-tb').css('font-size', '1.2em');
	
	google.charts.load('current', {'packages':['corechart']});
	//google.charts.setOnLoadCallback(drawChart);
	
	//blocking cross-domain at the moment
	/*$.get("https://www.cryptocompare.com/api/data/coinlist/",
		function(data) {
			console.log(data);
			$.each(data.Data, function(index, value){
				symLib.push(value.Symbol);
			});
		},
		"json"
	);*/
	
	$.each(rawCoins.Data, function(index, value){
		symLib.push(value.Symbol);
		nameLib[value.Symbol] = value.CoinName;
		imageLib[value.Symbol] = value.ImageUrl;
	});
	
	$.each(symLib, function(index, value) {
		$('#coins-tb').append('<tr id="'+value+'" style="display:none"></tr>');
	});
	
	refreshCoins();
	refresher = setInterval(refreshCoins, 5000);
	charter = setInterval(drawChart, 15000);
	clearInterval(charter);
	
	//attach buttons
	$('#font-size-inc').click(function(){
		sz = parseFloat($('#coins-tb').css('font-size'));
		$('#coins-tb').css('font-size', sz+2);
	});
	$('#font-size-dec').click(function(){
		sz = parseFloat($('#coins-tb').css('font-size'));
		$('#coins-tb').css('font-size', sz-2);
	});
	$('#chart-control').click(function() {
		if($(this).prop('checked')) {
			$('.chart').show();
			drawChart();
			setInterval(drawChart, 15000);
		} else {
			$('.chart').hide();
			clearInterval(drawChart);
		}
	});
	$('#add-sym').click(function(){
		if(symLib.indexOf($('#sym-text').val()) >= 0) {
			fsym.push($('#sym-text').val());
			fsymStr = updateSymbols(fsym);
			reboot();
			$('#sym-text').val('');
		} else {
			console.log("Symbol not found in library.");
		}
	});
	
	//make symbol textbox autocomplete
	$('#sym-text').autocomplete({
		source: symLib
	});
	
	//set full refresh function
	reboot = function() {
		clearInterval(refresher);
		clearInterval(charter);
		refreshCoins();
		refresher = setInterval(refreshCoins, 5000);
		if($('#chart-control').prop('checked')) {
			drawChart();
			charter = setInterval(drawChart, 15000);
		}
	}
});