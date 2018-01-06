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

  <!-- Bootstrap CDN -->
  <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="lib/tether/tether.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="lib/css/style.min.css" rel="stylesheet">
  <link href="lib/css/menu.css" rel="stylesheet">
  
  <!--Ticker & Coin Javascript (must remain at top) -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="lib/charts/loader.js"></script>
  <script src="lib/api/rawCoins.js"></script>
  <script src="lib/api/ticker.min.js"></script>
  <script src="lib/tether/tether.min.js"></script>
  <script src="lib/custom.min.js"></script>

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
          <h3 class="section-title">Data Table</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"><input id="sym-text" placeholder="Search Symbol"/><button id="add-sym">Add Symbol</button></p>
        </div>
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
          <p class="section-description">Pick which exchange to pull information from.</p>
		  <div class="menu">
		  <ul>
			  <li><a href="#">796</a></li>
              <li><a href="#">Bitfinex</a></li>
			  <li><a href="#">bitFlyer</a></li>
			  <li><a href="#">Bithumb</a></li>
			  <li><a href="#">Bitmex</a></li>
			  <li><a href="#">Bitsquare</a></li>
			  <li><a href="#">Bitstamp</a></li>
			  <li><a href="#">Bittrex</a></li>
			  <li><a href="#">BitVC</a></li>
			  <li><a href="#">BTC China</a></li>
			  <li><a href="#">BTC-e</a></li>
			  <li><a href="#">Cryptsy</a></li>
              <li><a href="#">GDAX</a></li>
			  <li><a href="#">Gemeni</a></li>
			  <li><a href="#">Huobi</a></li>
              <li><a href="#">Kraken</a></li>
			  <li><a href="#">Mexbt</a></li>
			  <li><a href="#">Mt. Gox</a></li>
			  <li><a href="#">Luno</a></li>
			  <li><a href="#">OKCoin</a></li>
			  <li><a href="#">Poloniex</a></li>
			  <li><a href="#">Qryptos</a></li>
			  <li><a href="#">Quadriga</a></li>
			  <li><a href="#">Quoine</a></li>
			  <li><a href="#">Vault of Satoshi</a></li>
            </ul>
		</div>
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

  <!--<script src="lib/bootstrap/js/bootstrap.min.js"></script>-->
  <script src="lib/superfish/hoverIntent.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  

</body>
</html>
