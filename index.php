<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CryptoCrawler - Elegant Cryptocurrency Monitoring</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="CryptoCrawler, Cryptocurrency, altcoin, bitcoin, litecoin, ethereum" name="keywords">
  <meta content="Simple but elegant Cryptocurrency Monitoring" name="description">
  <meta content="Dalen & Tyler" name="author">
  <meta name="robots" content="index, follow">

  <!-- Facebook Meta Information -->
  <meta property="og:site_name" content="CryptoCrawler - Elegant Cryptocurrency Monitoring">
  <meta property="og:description" content="Simple but elegant Cryptocurrency Monitoring."/>
  <meta property="og:image" content="">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
  
  <!-- Twitter Meta Information -->
  <meta name="twitter:title" content="CryptoCrawler - Elegant Cryptocurrency Monitoring">
  <meta name="twitter:description" content="Simple but elegant Cryptocurrency Monitoring.">
  <meta name="twitter:image" content="">
  <meta name="twitter:card" content="">
  <meta name="twitter:image:alt" content="">
  
  <!-- Favicon - place in the root directory -->
  <!--<link href="favicon.ico" rel="shortcut icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
  <!-- jQuery JS Files -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-ui.min.js"></script>

  <!-- Bootstrap CDN -->
  <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="lib/tether/tether.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="lib/css/style.min.css" rel="stylesheet">
  
  <!-- Resource-package.min.js contains 7 JS files - do not modify order -->
  
  <script src="lib/charts/loader.js"></script>
  <script src="lib/api/rawCoins.js"></script>
  <script src="lib/api/ticker.js"></script>
  <script src="lib/resource-package.min.js"></script>

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Welcome Section
  ============================-->
  <section id="welcome">
      <video autoplay loop muted poster="" id="vid">
    <source src="lib/img/StarsSpaceBackground.mp4" type="video/mp4">
    </video>
    <div class="welcome-container">
      <div class="wow fadeIn">
        <div class="welcome-logo">
          <img class="" src="" alt="">
        </div>

        <h1>Welcome to CryptoCrawler</h1>
        <h2>Simple but elegant cryptocurrency <span class="rotating">data tables, historical charts, pool stats</span>!</h2>
        <div class="actions">
          <a href="#datatables" class="btn-data-tables">Data Tables</a>
          <a href="#historicalcharts" class="btn-charts">Historical Charts</a>
		  <a href="#cointickerpool" class="btn-cointickerpool">Cointicker Mining Pool</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--<a href="#welcome"><img src="" alt="" title="" /></img></a>-->
        <h1><a href="#welcome">CryptoCrawler</a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#welcome">Home</a></li>
          <li><a href="#datatables">Data Tables</a></li>
          <li><a href="#historicalcharts">Historical Charts</a></li>
          <li><a href="#cointickerpool">Mining Pool</a></li>
          <li><a href="#placeholder1">Placeholder 1</a></li>
          <li><a href="#exchanges" data-toggle="tooltip" title="Pick which exchange to pull information from.">Exchanges</a></li>
		  <li><a href="#developers">Developers</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
	 </div>
      <!-- #nav-menu-container -->
	  
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Data Table
  ============================-->
  <section id="datatables">
    <div class="container wow fadeInUp">
	<div class="row">
        <div class="col">
			<div class="card bg-info text-white">
				<div class="card-body">
				<h4 class="card-title"><i class="fa fa-bank"> Total Crypto Market Cap</i></h4>
				<p class="card-text">###</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card bg-info text-white">
				<div class="card-body">
				<h4 class="card-title"><i class="fa fa-line-chart"> 24 Hour Trade Volume</i></h4>
				<p class="card-text">###</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card bg-info text-white">
				<div class="card-body">
				<h4 class="card-title"><i class="fa fa-bank"> Placeholder</i></h4>
				<p class="card-text">###</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
          <h3 class="section-title" style="margin-top: 10px;">Data Table</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"><input id="sym-text" placeholder="Search Symbol"/><button id="add-sym">Add Symbol</button></p>
        </div>
      </div>
    </div>
	<div id="ticker">
		<table id="coins-tb" class="table-responsivechart table-bordered">
			<tr>
				<td colspan="12">
				<button class="btn btn-info btn" data-toggle="modal" data-target="#exchangeselect"style="margin-left: 5px;">Select Exchange</button>
					<div class="modal fade" id="exchangeselect">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Select which exchange to pull information from.</h4>
								</div>
								<div class="modal-body">
									<div class="row">
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">796</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bitfinex</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">bitFlyer</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bithumb</a></button></div>
									 </div>
									 <div class="row"> 
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bitmex</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bitsquare</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bitstamp</a></button></div>					 
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Bittrex</a></button></div>
									 </div>
									 <div class="row">
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">BitVC</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">BTC China</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">BTC-e</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Cryptsy</a></button></div>
									 </div>
									 <div class="row">
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">GDAX</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Gemeni</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Huobi</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Kraken</a></button></div>
									 </div>
									 <div class="row">
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Mexbt</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Mt. Gox</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Luno</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">OKCoin</a></button></div>
									 </div>
									 <div class="row">
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Poloniex</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Qryptos</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Quadriga</a></button></div>
									 <div class="col-md-3"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Quoine</a></button></div>
									 </div>
									 <div class="row">
									 <div class="col-md-12"><button class="btn btn-white btn-md" id="exchangebtn"><a href="#">Vault of Satoshi</a></button></div>
									</div>
      							</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal --></td>
				</tr>
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
	<div class="section-divider"></div>
  </section>

  <!--==========================
  Historical Charts
  ============================-->
  <section id="historicalcharts">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">Historical Charts</h3>
		  <label for="chart-control">Enable charts (beta)?</label> <input id="chart-control" type="checkbox" />
          <div class="section-title-divider"></div>  
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
	  <p>Placeholder</p>
	  <div class="chart-container" id="chart-container"></div>
      </div>
    </div>
	<div class="section-divider"></div>
  </section>
  
  <!--==========================
	Mining Pool Section
  ============================-->
  <section id="cointickerpool">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">CryptoCrawler Mining Pool Information</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
        </div>

        <div class="col-md-3">
		<p>Placeholder</p>
		
        </div>

      </div>
    </div>
	<div class="section-divider"></div>
  </section>

  <!--==========================
  placerholder1 Section
  ============================-->
  <section id="placeholder1">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">Placeholder 1</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>


    </div>
	<div class="section-divider"></div>
  </section>
  <!--==========================
  Exchanges Section
  ============================-->
  <section id="exchanges">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">Exchanges</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>
    </div>
	<div class="section-divider"></div>
  </section>

  <!--==========================
  Developer Section
  ============================-->
  <section id="developers">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="member">
            <h4>Tyler</h4>
            <span>Lead Developer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="member">
            <h4>Dalen</h4>
            <span>Motion and Interaction Design</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/in/dalen-humiston-1b59809a/"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="section-divider"></div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-envelope"></i>
              <p></p>
            </div>

          </div>
        </div>
			<div class="col-md-6 col-md-push-2">
			<div class="info">
			<div>
				<i class="fa fa-exchange"></i>
				<p>Any donations are greatly appreciated!</p>
			</div>
			</div>
			</div>
      </div>
	  <div class="row">
		<div class="col-md-6 col-md-push-2">
			<div class="info">
				<div>
				<p>If you run into any issues with the site <br>don't hesitate to email us!</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-md-push-2">
			<div class="info">
				<div>
				<p>ETH:<br>LTC:<br>XVG:</p>
				</div>
			</div>
		</div>
    </div>
	</div>
  </section>

  <!--==========================
  Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>N/A</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script async src="lib/tether/tether.min.js"></script>

</body>
</html>
