var symLib = [];
var nameLib = [];
var imageLib = [];
var chart = [];
var fsym = ["BTC","DASH","ETH","LTC","XMR","XRP","XVG"];

//constants
const COIN_REFRESH_INTERVAL = 5000;
const CHART_REFRESH_INTERVAL = 15000;

//from W3
sortTable = function() {
  var table, rows, switching, i, x, y, shouldSwitch;
  $table = $('#coins-tb');
  switching = true;
  
  while (switching) {
    switching = false;
    $rows = $table.children('tbody').children();
	
    for (i = 1; i < ($rows.length-1); i++) {
      shouldSwitch = false;
	  
      if ($($rows.get(i)).prop('id') > $($rows.get(i+1)).prop('id')) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      $($rows.get(i)).insertAfter($($rows.get(i+1)));
      switching = true;
    }
  }
}

updateSymbols = function() {
	fsym.sort();
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

var fsymStr = updateSymbols();

function drawChart() {
	var points = [];
	$.each(fsym, function(i, symbol) {
		points[symbol] = [];
		$.get("https://min-api.cryptocompare.com/data/histoday?aggregate=1&e=CCCAGG&extraParams=CryptoCompare&fsym="+symbol+"&limit=21&tryConversion=false&tsym=USD",
		
			function(data) {
				
				$.each(data.Data, function(x, value) {
					points[symbol][x] = [];
					points[symbol][x][0] = new Date(value.time*1000).toString();
					points[symbol][x][1] = value.close;
				});
				
				var options = {
					'legend': 'none',
					'title': symbol,
					'width': 500,
					'height': 300,
					'backgroundColor': 'rgb(36,36,36)',
					hAxis: {
					textStyle:{color: '#FFF'}
					},
					vAxis: {
					textStyle:{color: '#FFF'},
					//gridlines: {color: 'transparent'}
					},
					titleTextStyle: {
					color: '#FFF'
					},
					'areaOpacity':'0.7',
				}
				gTab = google.visualization.arrayToDataTable(points[symbol], true);
				chart[symbol] = new google.visualization.AreaChart(document.getElementById(symbol+'-24h-chart-div'));
				chart[symbol].draw(gTab, options);
			},
			"json"
		);
	});
}

reloadTicker = function(dataRaw) {
	dataUSD = dataRaw.USD;
	dataBTC = dataRaw.BTC;
	
	if(dataRaw) {
		symbol = dataUSD.FROMSYMBOL;
		curUSD = dataUSD.PRICE;
		curBTC = dataBTC.PRICE;
		
		if(!$('#'+symbol).length) {
			$('#coins-tb').append($(document.createElement("TR")).prop('id', symbol));
			prevUSD = curUSD;
			prevBTC = curBTC;
		} else {
			prevUSD = parseFloat($('#'+symbol+'-price').text());
			prevBTC = parseFloat($('#'+symbol+'-price').text());
		}
		
		changeUSD = " ";
		if(curUSD > prevUSD) {
			changeUSD = "+"+(curUSD-prevUSD).toFixed(2);
		} else if(curUSD < prevUSD) {
			changeUSD = "-"+(prevUSD-curUSD).toFixed(2);
		}
		
		changeBTC = " ";
		if(curBTC > prevBTC) {
			changeBTC = "+"+(curBTC-prevBTC).toPrecision(3);
		} else if(curBTC < prevBTC) {
			changeBTC = "-"+(prevBTC-curBTC).toPrecision(3);
		}
		
		//show if hidden
		$('#'+symbol).show();
		
		//fill table row
		$('#'+symbol).html(
			"<td id='"+symbol+"-symbol'>"+
				"<a href='https://www.cryptocompare.com/coins/"+symbol+"/overview'><img class='icon' alt="+symbol+" src='https://www.cryptocompare.com"+imageLib[symbol]+"'></a>&nbsp;"+symbol+"</td>"+
			"<td id='"+symbol+"-name'>"+nameLib[symbol]+"</td>"+
			"<td id='"+symbol+"-price-usd'>"+parseFloat(dataUSD.PRICE).toFixed(2)+"</td>"+
			"<td id='"+symbol+"-change-usd'>"+changeUSD+"</td>"+
			"<td id='"+symbol+"-24h-change-usd'>"+parseFloat(dataUSD.CHANGE24HOUR).toFixed(2)+"</td>"+
			"<td id='"+symbol+"-price-btc'>"+parseFloat(dataBTC.PRICE).toPrecision(3)+"</td>"+
			"<td id='"+symbol+"-change-btc'>"+changeBTC+"</td>"+
			"<td id='"+symbol+"-24h-change-btc'>"+parseFloat(dataBTC.CHANGE24HOUR).toPrecision(3)+"</td>"+
			"<td id='"+symbol+"-24h-change-pct'>"+parseFloat(dataBTC.CHANGEPCT24HOUR).toPrecision(4)+"</td>"+
			"<td id='"+symbol+"-market-cap'>"+parseFloat(dataBTC.MKTCAP).toPrecision(12)+"</td>"+
			"<td id='"+symbol+"-update'>"+(new Date()).toLocaleTimeString()+"</td>"+
			"<td id='"+symbol+"-hide'><button class='hider'>X</button></td>"
		)
		
		if(!$('#'+symbol+'-24h-chart-div').length) {
			$('#chart-container').append("<div id='"+symbol+"-24h-chart-div' class='chart' style='display:none'></div>");
		}
		
		$('#'+symbol+'-hide').find('.hider').click(function() {
			$this = $(this);
			$this.parents('tr').remove();
			symbol = $this.parent().prop('id').split('-')[0];
			$('#'+symbol+'-24h-chart-div').remove();
			fsym.splice(fsym.indexOf(symbol, 1));
			fsymStr = updateSymbols();
			reboot();
		});
		
		//process colors
		if(curUSD > prevUSD) {
			$('#'+symbol+'-change-usd').css('color', 'lawngreen');
		} else if(curUSD < prevUSD) {
			$('#'+symbol+'-change-usd').css('color', 'crimson');
		} else {
			$('#'+symbol+'-change-usd').css('color', 'black');
		}
		
		if(curBTC > prevBTC) {
			$('#'+symbol+'-change-btc').css('color', 'lawngreen');
		} else if(curBTC < prevBTC) {
			$('#'+symbol+'-change-btc').css('color', 'crimson');
		} else {
			$('#'+symbol+'-change-btc').css('color', 'black');
		}
		
		sortTable();
	}
	return;
}

refreshCoins = function() {
	if(fsymStr.length >= 3) {
		$.get("https://min-api.cryptocompare.com/data/pricemultifull?fsyms="+fsymStr+"&tsyms=USD,BTC",
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
	
	google.charts.load('current', {'packages':['corechart']});
	//google.charts.setOnLoadCallback(drawChart);
	
	//blocking cross-domain at the moment
	/*$.get("https://min-api.cryptocompare.com/data/all/coinlist",
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
	
/* Removed for dynamic creation #5 */
//	$.each(symLib, function(index, value) {
//		$('#coins-tb').append('<tr id="'+value+'" style="display:none"></tr>');
//	});
	
	refreshCoins();
	refresher = setInterval(refreshCoins, COIN_REFRESH_INTERVAL);
	charter = setInterval(drawChart, CHART_REFRESH_INTERVAL);
	clearInterval(charter);
	
	if($('#chart-control').prop('checked')) {
		drawChart();
		charter = setInterval(drawChart, CHART_REFRESH_INTERVAL);
	}
	
	//set full refresh function
	reboot = function() {
		clearInterval(refresher);
		clearInterval(charter);
		refreshCoins();
		refresher = setInterval(refreshCoins, COIN_REFRESH_INTERVAL);
		if($('#chart-control').prop('checked')) {
			drawChart();
			charter = setInterval(drawChart, CHART_REFRESH_INTERVAL);
		}
	}
	
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
			setInterval(drawChart, CHART_REFRESH_INTERVAL);
		} else {
			$('.chart').hide();
			clearInterval(drawChart);
		}
	});
	$('#add-sym').click(function(){
		if(symLib.indexOf($('#sym-text').val()) >= 0) {
			fsym.push($('#sym-text').val());
			fsymStr = updateSymbols();
			sortTable();
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
});