@extends("layouts.home")

@section("title" , "news page | Html convesion")


@section("news")
<div class="container-fluid" style="padding-bottom: 50px;">
	<div class="row">
		<div>
			<img src="images/slider/bg2.jpg" width="100%" height="300px">
		</div>
		
	</div>
</div>

<section style="padding-bottom: 50px">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3>Trending</h3>
				<p>3 hours ago</p>
				<a href=""><h4>NZD/USD resumes decline on RBNZ rate cut bets</h4></a>
				<hr>

				<p>2 hours ago</p>
				<a href=""><h4>NZD/USD resumes decline on RBNZ rate cut bets</h4></a>
				<hr>
			</div>
			<div class="col-md-6 ">
				<div class="card newscard">
			    	<h4>ForexLive .
                     2 hours ago</h4>
			    	<img src="images/slider/bg2.jpg" width="100%" height="200px">
			    	<h3><a href="">EUR/USD struggles for direction as sellers lack conviction for downside break</a></h3>
			    	<p>EUR/USD sellers remain in near-term control but aren't able to drive price towards the 1.1200 handlePrice sits in a narrow range on the day - 19 pips - as the pair continues to struggle for direction...</p>
		        </div>

		        <div class="card newscard" style="margin-top: 50px">
			    	<h4>CNBC .
                     21 hours ago</h4>
			    	<img src="images/slider/bg2.jpg" width="100%" height="200px">
			    	<h3><a href="">EUR/USD struggles for direction as sellers lack conviction for downside break</a></h3>
			    	<p>EUR/USD sellers remain in near-term control but aren't able to drive price towards the 1.1200 handlePrice sits in a narrow range on the day - 19 pips - as the pair continues to struggle for direction...</p>
		        </div>
			</div>
			
			<div class="col-md-3" style="border-bottom: 1px solid #e8e8e8; padding-bottom: 15px">
				<h3>Stocks</h3>
					<img src="images/buttons/3.png" width="50" height="50" style="display:block;display: inline-block;float: left;">
				      <div style=" display:inline-block;float: left; font-size: 18px;margin-left: 10px;margin-top:-5px">
					<div style="display: block;">Qualcomm </div>
					  <div style="display: block;font-size: 12px;margin-top: -6px">81.98 +42.7</div>
					</div>
					
			</div>

		</div>
	</div>
</section>


@endsection