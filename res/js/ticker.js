		symLib = [];
		nameLib = [];
		
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
					"<td id='"+symbol+"-symbol'>"+symbol+"</td>"+
					"<td id='"+symbol+"-name'>"+nameLib[symbol]+"</td>"+
					"<td id='"+symbol+"-price'>"+data.PRICE+"</td>"+
					"<td id='"+symbol+"-change'>"+change+"</td>"+
					"<td id='"+symbol+"-24h-change'>"+parseFloat(data.CHANGE24HOUR).toFixed(2)+"</td>"+
					"<td id='"+symbol+"-update'>"+(new Date()).toLocaleTimeString()+"</td>"+
					"<td id='"+symbol+"-hide'><button class='hider'>X</button></td>"
				)
				
				$('#'+symbol+'-hide').find('.hider').click(function() {
					$this = $(this);
					$this.parents('tr').html('');
					$this.parents('tr').hide();
					fsym.splice(parseInt(fsym.indexOf(symbol)), 1);
					fsymStr = updateSymbols(fsym);
					clearInterval(refresher);
					refreshCoins();
					refresher = setInterval(refreshCoins, 5000);
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
			});
			
			$.each(symLib, function(index, value) {
				$('#coins-tb').append('<tr id="'+value+'" style="display:none"></tr>');
			});
			
			refreshCoins();
			refresher = setInterval(refreshCoins, 5000);
			
			//attach buttons
			$('#font-size-inc').click(function(){
				sz = parseFloat($('#coins-tb').css('font-size'));
				$('#coins-tb').css('font-size', sz+2);
			});
			$('#font-size-dec').click(function(){
				sz = parseFloat($('#coins-tb').css('font-size'));
				$('#coins-tb').css('font-size', sz-2);
			});
			$('#add-sym').click(function(){
				if(symLib.indexOf($('#sym-text').val()) >= 0) {
					fsym.push($('#sym-text').val());
					fsymStr = updateSymbols(fsym);
					clearInterval(refresher);
					refreshCoins();
					refresher = setInterval(refreshCoins, 5000);
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