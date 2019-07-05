@extends("layouts.home")

@section("title" , "turnaments page | Html convesion")

<section >
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown" style="margin-top: 50px">Online Trading Tournaments</h2>
            
        </div>
    </div>
</section>

<section style="margin-bottom: 30px;">
	<div class="container mt-3">
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs">
	    <li class="nav-item">
	      <a class="nav-link active" data-toggle="tab" href="#home">Trading Tournaments In Progress</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" data-toggle="tab" href="#menu1">Upcoming Online Trading Tournaments</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" data-toggle="tab" href="#menu2">Upcoming Online Trading Tournaments</a>
	    </li>
	  </ul>

	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div id="home" class="container tab-pane active">
	      <div class="row" style=" width: 96%;  padding-bottom: 20px">
	      	<div class="col-md-8">
	      		<h3>72 Hours</h3>
	      		<p>Time left to the end:<br>
	      		A day</p>

	      		<div class="row" style="background-color: #eee">
	      			<div class="col-md-4"><p>100 <br>entry fee</p></div>
	      			<div class="col-md-4"><p>7245 <br> participants</p></div>
	      			<div class="col-md-4"><p>3 dad <br> duration</p></div>
	      		</div>

	      	</div>
	      	<div class="col-md-4">
	      		
	      		<h3>5000</h3>
	      		<p>prize pool</p>
	      		<p>prize pool destributin</p>
	      		 <div class="row">
	      		 	<div class="col-md-3"></div>
	      		 	<div class="col-md-6">
	      		      <button class="btn" style="height: 50px; background-color: #ddd">Registration</button>
	      		    </div>
	      		    <div class="col-md-3"></div>
	      		 </div>
	      	</div>
	      </div>

	      <div class="row" style=" width: 96%;  padding-bottom: 20px; margin-top: 50px;">
	      	<div class="col-md-8">
	      		<h3>72 Hours</h3>
	      		<p>Time left to the end:<br>
	      		A day</p>

	      		<div class="row" style="background-color: #eee">
	      			<div class="col-md-4"><p>100 <br>entry fee</p></div>
	      			<div class="col-md-4"><p>7245 <br> participants</p></div>
	      			<div class="col-md-4"><p>3 dad <br> duration</p></div>
	      		</div>

	      	</div>
	      	<div class="col-md-4">
	      		
	      		<h3>5000</h3>
	      		<p>prize pool</p>
	      		<p>prize pool destributin</p>
	      		 <div class="row">
	      		 	<div class="col-md-3"></div>
	      		 	<div class="col-md-6">
	      		      <button class="btn" style="height: 50px; background-color: #ddd">Registration</button>
	      		    </div>
	      		    <div class="col-md-3"></div>
	      		 </div>
	      	</div>
	      </div>
	    </div>
	    <div id="menu1" class="container tab-pane fade">
	      <h3>Upcoming Online Trading Tournaments</h3>
	      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div id="menu2" class="container tab-pane fade">
	      <h3>Upcoming Online Trading Tournaments</h3>
	      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	    </div>
	  </div>
	</div>

</section>

@section("turnaments")