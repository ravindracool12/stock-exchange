@extends("layouts.home")

@section("title" , "historial page | Html convesion")
@section("historical")

<div class="container-fluid" style="padding-bottom: 50px;">
	<div class="container">
		<div class="row">
			<div>
				<img src="images/slider/bg2.jpg" width="100%" height="300px">
			</div>
			
		</div>
	</div>
</div>

<section style="margin-bottom: 50px">
	<div class="container">
		<div class="row chistorical">
			<div class="col-md-3">
				<p>Instrument</p>
				<select>
					<option>EUR/ESD</option>
					<option>EUR/ESD</option>
					<option>EUR/ESD</option>
					<option>EUR/ESD</option>
					<option>EUR/ESD</option>
				</select>
			</div>
			<div class="col-md-3">
				<p>Timezone</p>
			    <select>
						<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
						<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
						<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
						<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
						<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
						<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
						<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
				 </select>
			</div>
			<div class="col-md-3">
				<p>Date</p>
				 <form action="/action_page.php">
				   <input type="date" name="bday">
				</form>
			</div>
			<div class="col-md-1">
				<p>Hour</p>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
				</select>
			</div>
			<div class="col-md-1">
				<p>Minuts</p>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</div>
			<div class="col-md-1">
				<p>Second</p>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</div>
		</div>
	</div>


</section>

<section class="services" style="margin-bottom: 50px">
	<div class="container">
		<div style="overflow-x:auto;">
		  <table>
		    <tr>
		      <th>Date</th>
		      <th>Bid</th>
		      <th>Ask</th>
		      <th>Quotes</th>
		   <!--    <th>Points</th>
		      <th>Points</th>
		      <th>Points</th>
		      <th>Points</th>
		      <th>Points</th>
		      <th>Points</th>
		      <th>Points</th>
		      <th>Points</th> -->
		    </tr>
		    <tr>
		      <td>22/04/2019 15.20.09</td>
		      <td>1.124660</td>
		      <td>50</td>
		      <td>50</td>
		      <!-- <td>50</td>
		      <td>50</td>
		      <td>50</td>
		      <td>50</td>
		      <td>50</td>
		      <td>50</td>
		      <td>50</td>
		      <td>50</td> -->
		    </tr>
		    <tr>
		      <td>22/04/2019 15.20.09</td>
		      <td>1.124660</td>
		      <td>94</td>
		      <td>94</td>
		      <!-- <td>94</td>
		      <td>94</td>
		      <td>94</td>
		      <td>94</td>
		      <td>94</td>
		      <td>94</td>
		      <td>94</td>
		      <td>94</td> -->
		    </tr>
		    <tr>
		      <td>22/04/2019 15.20.09</td>
		      <td>1.124660</td>
		      <td>67</td>
		      <td>67</td>
		      <!-- <td>67</td>
		      <td>67</td>
		      <td>67</td>
		      <td>67</td>
		      <td>67</td>
		      <td>67</td>
		      <td>67</td>
		      <td>67</td> -->
		    </tr>
		  </table>
		</div>
	</div>
</section>
@section("historial")