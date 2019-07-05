@extends("layouts.home")

@section("title" , "collection page | Html convesion")

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>

<section >
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown" style="margin-top: 50px">Trading Hours & Fees</h2>
            <p class="text-center wow fadeInDown">Please find below all the fees charged for the use of our financial instruments and a detailed trading schedule</p>
            
        </div>
    </div>
</section>

<section>
	<div class="container cardp">
		<div class="row ">
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Stocks<br>
		    	186 stocks</p>
		    </div>
		  </div>

		  <div class="col-md-3 column">
		    <div class="card">
		       <p> Options<br>
		        181 options</p>
		    </div>
		  </div>
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Forex<br>
		    	74 forex pairs</p>
		    </div>
		  </div>
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Cryptocurrencies<br>
		    	25 cryptocurrencies</p>
		    </div>
		  </div>
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Forex<br>
		    	74 forex pairs</p>
		    </div>
		  </div>
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Cryptocurrencies<br>
		    	25 cryptocurrencies</p>
		    </div>
		  </div>
		  <div class="col-md-3 column">
		    <div class="card">
		    	<p>Cryptocurrencies<br>
		    	25 cryptocurrencies</p>
		    </div>
		  </div>


		</div>
		<p>Spread may vary depending on market conditions and liquidity. Under certain circumstances, spread may be either higher or lower than the level indicated in our table. Also, please pay attention to overnight funding that is charged for keeping your positions open.</p>
	</div>
</section>